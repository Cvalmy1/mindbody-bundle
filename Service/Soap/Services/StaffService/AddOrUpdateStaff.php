<?php


namespace Despark\MindbodyBundle\Service\Soap\Services\StaffService;


use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\Soap\Services\ServiceMethodInterface;
use Despark\MindbodyBundle\Service\Soap\Services\StaffService;
use Despark\MindbodyBundle\Service\Soap\Services\StaffService\AddOrUpdateStaff\AddOrUpdateStaffResponse;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultServiceMethodTrait;
use Despark\MindbodyBundle\Service\SoapServiceInterface;

class AddOrUpdateStaff implements ServiceMethodInterface
{
    use DefaultServiceMethodTrait;

    public function __construct(SoapServiceInterface $soapService, ResponseParserInterface $responseParser)
    {
        $this->setResponseParser($responseParser);
        $this->setSoapService($soapService);
        $this->setResponseClass(AddOrUpdateStaffResponse::class);
    }

    /**
     * @return string
     */
    public static function getServiceName(): string
    {
        return StaffService::SERVICE_NAME;
    }

}