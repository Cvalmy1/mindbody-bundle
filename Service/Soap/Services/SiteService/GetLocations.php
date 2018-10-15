<?php


namespace Despark\MindbodyBundle\Service\Soap\Services\SiteService;


use Despark\MindbodyBundle\Service\Soap\Interfaces\CacheResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\Soap\Services\ServiceMethodInterface;
use Despark\MindbodyBundle\Service\Soap\Services\SiteService;
use Despark\MindbodyBundle\Service\Soap\Services\SiteService\GetLocations\GetLocationsResponse;
use Despark\MindbodyBundle\Service\Soap\Traits\CacheResponseTrait;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultServiceMethodTrait;
use Despark\MindbodyBundle\Service\SoapServiceInterface;

/**
 * Class GetLocations.
 */
class GetLocations implements ServiceMethodInterface, CacheResponseInterface
{
    use DefaultServiceMethodTrait, CacheResponseTrait;

    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface
     */
    private $responseParser;
    /**
     * @var \Despark\MindbodyBundle\Service\SoapServiceInterface
     */
    private $soapService;
    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface
     */
    private $response;
    /**
     * @var \stdClass
     */
    private $rawResponse;
    /**
     * @var \Despark\MindbodyBundle\Collection\EnrollmentCollection
     */
    private $parsedResponse;
    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface
     */
    private $request;
    /**
     * @var string
     */
    private $responseClass = GetLocationsResponse::class;

    /**
     * GetEnrollments constructor.
     * @param \Despark\MindbodyBundle\Service\SoapServiceInterface $soapService
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface $responseParser
     */
    public function __construct(SoapServiceInterface $soapService, ResponseParserInterface $responseParser)
    {
        $this->setResponseParser($responseParser);

        $this->setSoapService($soapService);
    }

    /**
     * @return string
     */
    public static function getServiceName(): string
    {
        return SiteService::SERVICE_NAME;
    }
}