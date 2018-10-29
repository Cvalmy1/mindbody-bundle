<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService;

use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\Soap\Services\ClassService;
use Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetClassDescriptions\GetClassDescriptionsResponse;
use Despark\MindbodyBundle\Service\Soap\Services\ServiceMethodInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultServiceMethodTrait;
use Despark\MindbodyBundle\Service\SoapServiceInterface;

/**
 * Class GetClassDescriptions
 */
class GetClassDescriptions implements ServiceMethodInterface
{
    use DefaultServiceMethodTrait;

    /**
     * GetClasses constructor.
     * @param \Despark\MindbodyBundle\Service\SoapServiceInterface $soapService
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface $responseParser
     */
    public function __construct(SoapServiceInterface $soapService, ResponseParserInterface $responseParser)
    {
        $this->setResponseParser($responseParser);
        $this->setSoapService($soapService);
        $this->setResponseClass(GetClassDescriptionsResponse::class);
    }

    /**
     * @return string
     */
    public static function getServiceName(): string
    {
        return ClassService::SERVICE_NAME;
    }
}