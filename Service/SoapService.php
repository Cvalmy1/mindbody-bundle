<?php

namespace Despark\MindbodyBundle\Service;

use Despark\MindbodyBundle\Exceptions\SoapClientException;
use Despark\MindbodyBundle\Service\Soap\SoapAuthentication;
use Despark\MindbodyBundle\Soap\MindBodySoapClient;

/**
 * Class SoapService
 * @package Despark\MindbodyBundle\Service
 */
class SoapService implements SoapServiceInterface
{
    const MB_NAMESPACE = 'http://clients.mindbodyonline.com/api/0_5_1';

    /**
     * @var string
     */
    private $version = '0_5_1';

    /**
     * @var string
     */
    private $url = 'https://api.mindbodyonline.com';

    /**
     * @var string
     */
    private $service;
    /**
     * @var \Despark\MindbodyBundle\Service\Soap\SoapAuthentication
     */
    private $auth;
    /**
     * @var \SoapClient
     */
    private $client;
    /**
     * @var bool
     */
    private $testMode;

    /**
     * SoapService constructor.
     *
     * @param \Despark\MindbodyBundle\Service\Soap\SoapAuthentication $auth
     * @param bool $testMode
     */
    public function __construct(SoapAuthentication $auth, $testMode = false)
    {
        $this->auth = $auth;
        $this->testMode = $testMode;
    }

    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $this->initClient();

        $response = $this->client->__soapCall($name, $this->prepareArguments($arguments));

        if ($response instanceof \SoapFault) {
            throw new SoapClientException($response->getMessage());
        }

        return $response;
    }

    /**
     *
     */
    private function initClient(): void
    {
        $this->client = new MindBodySoapClient($this->getWsdl(), [
            'location' => $this->getLocation(),
            'exceptions' => 0,
            'trace' => 1,
            'stream_context' => stream_context_create([
                'http' => [
                    'header' => $this->auth->getHeaders(),
                ],
            ]),

        ]);
    }


    /**
     * @return string
     */
    public function getUri(): string
    {
        return rtrim($this->url, '/').'/'.$this->getVersion();
    }

    /**
     * @return \SoapClient
     */
    public function getClient(): \SoapClient
    {
        return $this->client;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getRequest(): string
    {
        return $this->client->__getLastRequest();
    }

    /**
     * @return string
     */
    public function getResponse(): ?string
    {
        return $this->client->__getLastResponse();
    }

    /**
     * @param string $service
     *
     * @return \Despark\MindbodyBundle\Service\SoapServiceInterface
     */
    public function setService(string $service): SoapServiceInterface
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return string
     */
    private function getWsdl(): string
    {
        return $this->getLocation().'?wsdl';
    }

    /**
     * @return string
     */
    private function getLocation(): string
    {
        return $this->getUri().'/'.$this->service.'.asmx';
    }

    /**
     * @param array $arguments
     *
     * @return array
     */
    private function prepareArguments(array $arguments): array
    {
        foreach ($arguments as &$argument) {
            //Wrap arguments in request.
            $request = new \stdClass();
            // We need to force the same namespace so we hardcoded it
            $request->Request = $argument;

            if ($this->testMode) {
                $request->Request->Test = true;
            }

            $argument = new \SoapVar($request, SOAP_ENC_OBJECT);
        }

        return $arguments;
    }
}