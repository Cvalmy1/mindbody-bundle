<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClientService;

use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\Soap\Services\ClientService;
use Despark\MindbodyBundle\Service\Soap\Services\ClientService\GetClients\GetClientsResponse;
use Despark\MindbodyBundle\Service\Soap\Services\ServiceMethodInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultServiceMethodTrait;
use Despark\MindbodyBundle\Service\SoapServiceInterface;

/**
 * Class GetClients
 */
class GetClients implements ServiceMethodInterface
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
        $this->setResponseClass(GetClientsResponse::class);
    }

    /**
     * @return string
     */
    public static function getServiceName(): string
    {
        return ClientService::SERVICE_NAME;
    }
}