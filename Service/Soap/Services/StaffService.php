<?php


namespace Despark\MindbodyBundle\Service\Soap\Services;


use Despark\MindbodyBundle\Service\Soap\Interfaces\MindbodyServiceInterface;
use Despark\MindbodyBundle\Service\Soap\Services\StaffService\AddOrUpdateStaff;
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
     * @var \Despark\MindbodyBundle\Service\Soap\Services\StaffService\AddOrUpdateStaff
     */
    private $addOrUpdateStaff;

    /**
     * StaffService constructor.
     *
     * @param \Despark\MindbodyBundle\Service\Soap\Services\StaffService\GetStaff $getStaffMethod
     * @param \Despark\MindbodyBundle\Service\Soap\Services\StaffService\AddOrUpdateStaff $addOrUpdateStaff
     */
    public function __construct(GetStaff $getStaffMethod, AddOrUpdateStaff $addOrUpdateStaff)
    {
        $this->getStaffMethod = $getStaffMethod;
        $this->addOrUpdateStaff = $addOrUpdateStaff;
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Services\StaffService\GetStaff
     */
    public function getGetStaffMethod(): GetStaff
    {
        return $this->getStaffMethod;
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Services\StaffService\AddOrUpdateStaff
     */
    public function getAddOrUpdateStaffMethod(): AddOrUpdateStaff
    {
        return $this->addOrUpdateStaff;
    }
}