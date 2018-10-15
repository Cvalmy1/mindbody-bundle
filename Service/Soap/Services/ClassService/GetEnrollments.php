<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService;

use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\Soap\Services\ClassService;
use Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments\GetEnrollmentsResponse;
use Despark\MindbodyBundle\Service\Soap\Services\ServiceMethodInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultServiceMethodTrait;
use Despark\MindbodyBundle\Service\SoapServiceInterface;

/**
 * Class GetEnrollments
 * @package Despark\MindbodyBundle\Service\Soap\Services\ClassService
 */
class GetEnrollments implements ServiceMethodInterface
{
    use DefaultServiceMethodTrait;

    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface
     */
    private $response;

    /**
     * @var \Despark\MindbodyBundle\Collection\EnrollmentCollection
     */
    private $parsedResponse;

    private $responseClass = GetEnrollmentsResponse::class;

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
        return ClassService::SERVICE_NAME;
    }
}