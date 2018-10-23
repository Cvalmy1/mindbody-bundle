<?php


namespace Despark\MindbodyBundle\Service\Soap\Services\StaffService;


use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\Soap\Services\ServiceMethodInterface;
use Despark\MindbodyBundle\Service\Soap\Services\StaffService;
use Despark\MindbodyBundle\Service\Soap\Services\StaffService\GetStaff\GetStaffResponse;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultServiceMethodTrait;
use Despark\MindbodyBundle\Service\SoapServiceInterface;

/**
 * Class GetStaffMethod.
 */
class GetStaff implements ServiceMethodInterface
{
    use DefaultServiceMethodTrait;


    public function __construct(SoapServiceInterface $soapService, ResponseParserInterface $responseParser)
    {
        $this->setResponseParser($responseParser);
        $this->setSoapService($soapService);
        $this->setResponseClass(GetStaffResponse::class);
    }

    /**
     * @return string
     */
    public static function getServiceName(): string
    {
        return StaffService::SERVICE_NAME;
    }
}