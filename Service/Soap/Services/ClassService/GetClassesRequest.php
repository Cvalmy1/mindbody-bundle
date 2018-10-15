<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService;

use Despark\MindbodyBundle\Service\Soap\Traits\DefaultRequestTrait;
use Despark\MindbodyBundle\Service\Soap\Traits\RequestDateTime;

/**
 * Class GetClassesRequest
 * @package Despark\MindbodyBundle\Service\Soap\Request
 */
class GetClassesRequest
{
    use DefaultRequestTrait, RequestDateTime;

    /**
     * @var int[]|null
     */
    protected $ClassDescriptionIDs;

    /**
     * @var int[]|null
     */
    protected $ClassIDs;

    /**
     * @var int[]|null
     */
    protected $StaffIDs;

    /**
     * @var int
     */
    protected $ClientID;

    /**
     * @var int[]|null
     */
    protected $ProgramIDs;

    /**
     * @var int[]|null
     */
    protected $SessionTypeIDs;

    /**
     * @var int[]|null
     */
    protected $LocationIDs;

    /**
     * @var bool
     */
    protected $HideCanceledClasses;

    /**
     * @var bool
     */
    protected $SchedulingWindow;

    /**
     * @var \DateTimeInterface|null
     */
    protected $LastModifiedDate;

    /**
     * @return int[]|null
     */
    public function getClassDescriptionIDs(): ?array
    {
        return $this->ClassDescriptionIDs;
    }

    /**
     * @param int[]|null $ClassDescriptionIDs
     */
    public function setClassDescriptionIDs(?array $ClassDescriptionIDs): void
    {
        $this->ClassDescriptionIDs = $ClassDescriptionIDs;
    }

    /**
     * @return int[]|null
     */
    public function getClassIDs(): ?array
    {
        return $this->ClassIDs;
    }

    /**
     * @param int[]|null $ClassIDs
     */
    public function setClassIDs(?array $ClassIDs): void
    {
        $this->ClassIDs = $ClassIDs;
    }

    /**
     * @return int[]|null
     */
    public function getStaffIDs(): ?array
    {
        return $this->StaffIDs;
    }

    /**
     * @param int[]|null $StaffIDs
     */
    public function setStaffIDs(?array $StaffIDs): void
    {
        $this->StaffIDs = $StaffIDs;
    }

    /**
     * @return int
     */
    public function getClientID(): int
    {
        return $this->ClientID;
    }

    /**
     * @param int $ClientID
     */
    public function setClientID(int $ClientID): void
    {
        $this->ClientID = $ClientID;
    }

    /**
     * @return int[]|null
     */
    public function getProgramIDs(): ?array
    {
        return $this->ProgramIDs;
    }

    /**
     * @param int[]|null $ProgramIDs
     */
    public function setProgramIDs(?array $ProgramIDs): void
    {
        $this->ProgramIDs = $ProgramIDs;
    }

    /**
     * @return int[]|null
     */
    public function getSessionTypeIDs(): ?array
    {
        return $this->SessionTypeIDs;
    }

    /**
     * @param int[]|null $SessionTypeIDs
     */
    public function setSessionTypeIDs(?array $SessionTypeIDs): void
    {
        $this->SessionTypeIDs = $SessionTypeIDs;
    }

    /**
     * @return int[]|null
     */
    public function getLocationIDs(): ?array
    {
        return $this->LocationIDs;
    }

    /**
     * @param int[]|null $LocationIDs
     */
    public function setLocationIDs(?array $LocationIDs): void
    {
        $this->LocationIDs = $LocationIDs;
    }

    /**
     * @return bool
     */
    public function isHideCanceledClasses(): bool
    {
        return $this->HideCanceledClasses;
    }

    /**
     * @param bool $HideCanceledClasses
     */
    public function setHideCanceledClasses(bool $HideCanceledClasses): void
    {
        $this->HideCanceledClasses = $HideCanceledClasses;
    }

    /**
     * @return bool
     */
    public function isSchedulingWindow(): bool
    {
        return $this->SchedulingWindow;
    }

    /**
     * @param bool $SchedulingWindow
     */
    public function setSchedulingWindow(bool $SchedulingWindow): void
    {
        $this->SchedulingWindow = $SchedulingWindow;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getLastModifiedDate(): ?\DateTimeInterface
    {
        return $this->LastModifiedDate;
    }

    /**
     * @param \DateTimeInterface|null $LastModifiedDate
     */
    public function setLastModifiedDate(?\DateTimeInterface $LastModifiedDate): void
    {
        $this->LastModifiedDate = $LastModifiedDate;
    }
}