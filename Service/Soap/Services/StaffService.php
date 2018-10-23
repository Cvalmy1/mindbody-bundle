<?php


namespace Despark\MindbodyBundle\Service\Soap\Services;


use Despark\MindbodyBundle\Service\Soap\Interfaces\MindbodyServiceInterface;
use Despark\MindbodyBundle\Service\Soap\Services\StaffService\GetStaff;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultSoapServiceTrait;

/**
 * Class StaffService.
 */
class StaffService implements MindbodyServiceInterface
{
    use DefaultSoapServiceTrait;

    /**
     * Sericename
     */
    const SERVICE_NAME = 'StaffService';
    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Services\StaffService\GetStaff
     */
    private $getStaffMethod;


    /**
     * StaffService constructor.
     *
     * @param \Despark\MindbodyBundle\Service\Soap\Services\StaffService\GetStaff $getStaffMethod
     */
    public function __construct(GetStaff $getStaffMethod)
    {
        $this->getStaffMethod = $getStaffMethod;
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Services\StaffService\GetStaff
     */
    public function getGetStaffMethod(): GetStaff
    {
        return $this->getStaffMethod;
    }
}