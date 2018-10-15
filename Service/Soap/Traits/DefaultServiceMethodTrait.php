<?php


namespace Despark\MindbodyBundle\Service\Soap\Traits;


use Despark\MindbodyBundle\Service\Soap\Interfaces\CacheResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\Soap\Services\ServiceMethodInterface;
use Despark\MindbodyBundle\Service\Soap\SimpleResponse;
use Despark\MindbodyBundle\Service\SoapServiceInterface;
use Illuminate\Support\Collection;
use ReflectionObject;

trait DefaultServiceMethodTrait
{
    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface
     */
    private $responseParser;
    /**
     * @var \Despark\MindbodyBundle\Service\SoapServiceInterface
     */
    private $soapService;
    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface
     */
    private $request;

    /**
     * @var \stdClass
     */
    private $rawResponse;


    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface $request
     * @return mixed
     * @throws \Psr\Cache\InvalidArgumentException
     */
    public function execute(RequestInterface $request): ServiceMethodInterface
    {
        $this->request = $request;

        if ($this instanceof CacheResponseInterface) {
            return $this->handleCachedRequest($request);
        }

        $this->rawResponse = $this->callSoapService($request);

        return $this;
    }

    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface $request
     * @return $this
     * @throws \Psr\Cache\InvalidArgumentException
     */
    private function handleCachedRequest(RequestInterface $request)
    {
        if ($this instanceof CacheResponseInterface) {
            $cache = $this->getCache();
            $cacheTag = $this->getCacheTag();
            $cacheItem = $cache->getItem($cacheTag);
            if ($cacheItem->isHit()) {
                $this->rawResponse = $cacheItem->get();

            } else {
                $this->rawResponse = $this->callSoapService($request);

                $cacheItem->set($this->rawResponse);
                $cache->save($cacheItem);
            }

        }

        return $this;
    }

    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface $request
     * @return mixed
     */
    private function callSoapService(RequestInterface $request)
    {
        $method = $this->getClassShortName();

        /** @noinspection PhpUndefinedMethodInspection */
        return $this->soapService->$method($request);
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface
     */
    public function getResponse(): ?ResponseInterface
    {
        $property = $this->getClassShortName().'Result';

        if (!isset($this->response) && isset($this->rawResponse->{$property})) {
            $this->response = $this->castResponse(
                $this->rawResponse->{$property}
            );
        }

        return $this->response;
    }

    /**
     * @return mixed
     */
    public function getResult(): Collection
    {
        $response = $this->getResponse();

        return $response ? $this->responseParser->parse($response) : new Collection();
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    /**
     * @return string
     */
    public function getExecutedRequest(): string
    {
        return $this->soapService->getRequest();
    }

    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface $responseParser
     */
    public function setResponseParser(ResponseParserInterface $responseParser): void
    {
        $this->responseParser = $responseParser;
    }

    /**
     * @param \Despark\MindbodyBundle\Service\SoapServiceInterface $soapService
     */
    public function setSoapService(SoapServiceInterface $soapService): void
    {
        $this->soapService = $soapService;

        $this->soapService->setService($this->getServiceName());
    }


    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface|null
     */
    public function getRawResponse(): ?\stdClass
    {
        return $this->rawResponse;
    }

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return isset($this->responseClass) ? $this->responseClass : SimpleResponse::class;
    }

    /**
     * @param string $responseClass
     */
    public function setResponseClass(string $responseClass): void
    {
        $this->responseClass = $responseClass;
    }

    /**
     * @return string
     */
    private function getClassShortName(): string
    {
        $method = (new \ReflectionClass($this))->getShortName();

        return $method;
    }


    /**
     * @param null|\stdClass $sourceObject
     * @return mixed
     */
    private function castResponse(?\stdClass $sourceObject): ?ResponseInterface
    {
        if (is_null($sourceObject)) {
            return null;
        }
        $responseClass = $this->getResponseClass();

        $destination = new $responseClass;

        $sourceReflection = new ReflectionObject($sourceObject);
        $destinationReflection = new ReflectionObject($destination);
        $sourceProperties = $sourceReflection->getProperties();
        foreach ($sourceProperties as $sourceProperty) {
            $sourceProperty->setAccessible(true);
            $name = $sourceProperty->getName();
            $value = $sourceProperty->getValue($sourceObject);
            if ($destinationReflection->hasProperty($name)) {
                $propDest = $destinationReflection->getProperty($name);
                $propDest->setAccessible(true);
                $propDest->setValue($destination, $value);
            } else {
                $destination->$name = $value;
            }
        }

        return $destination;
    }
}