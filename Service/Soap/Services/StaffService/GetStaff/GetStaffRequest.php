<?php


namespace Despark\MindbodyBundle\Service\Soap\Services\StaffService\GetStaff;


use Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultRequestTrait;

class GetStaffRequest implements RequestInterface
{
    use DefaultRequestTrait;

    /**
     * @var array|null
     */
    private $StaffIDs;

    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Request\StaffCredentialsRequest
     */
    private $StaffCredentials;

    /**
     * @var array|null
     */
    private $Filters;

    /**
     * @var int|null
     */
    private $SessionTypeID;

    /**
     * @var \Carbon\Carbon
     */
    private $StartDateTime;

    /**
     * @var int|null
     */
    private $LocationID;

    /**
     * @return array|null
     */
    public function getStaffIDs(): ?array
    {
        return $this->StaffIDs;
    }

    /**
     * @param array|null $StaffIDs
     */
    public function setStaffIDs(?array $StaffIDs): void
    {
        $this->StaffIDs = $StaffIDs;
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Request\StaffCredentialsRequest
     */
    public function getStaffCredentials(): \Despark\MindbodyBundle\Service\Soap\Request\StaffCredentialsRequest
    {
        return $this->StaffCredentials;
    }

    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Request\StaffCredentialsRequest $StaffCredentials
     */
    public function setStaffCredentials(
        \Despark\MindbodyBundle\Service\Soap\Request\StaffCredentialsRequest $StaffCredentials
    ): void {
        $this->StaffCredentials = $StaffCredentials;
    }

    /**
     * @return array|null
     */
    public function getFilters(): ?array
    {
        return $this->Filters;
    }

    /**
     * @param array|null $Filters
     */
    public function setFilters(?array $Filters): void
    {
        $this->Filters = $Filters;
    }

    /**
     * @return int|null
     */
    public function getSessionTypeID(): ?int
    {
        return $this->SessionTypeID;
    }

    /**
     * @param int|null $SessionTypeID
     */
    public function setSessionTypeID(?int $SessionTypeID): void
    {
        $this->SessionTypeID = $SessionTypeID;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartDateTime(): \Carbon\Carbon
    {
        return $this->StartDateTime;
    }

    /**
     * @param \Carbon\Carbon $StartDateTime
     */
    public function setStartDateTime(\Carbon\Carbon $StartDateTime): void
    {
        $this->StartDateTime = $StartDateTime;
    }

    /**
     * @return int|null
     */
    public function getLocationID(): ?int
    {
        return $this->LocationID;
    }

    /**
     * @param int|null $LocationID
     */
    public function setLocationID(?int $LocationID): void
    {
        $this->LocationID = $LocationID;
    }
}