<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetClasses;

use Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultRequestTrait;
use Despark\MindbodyBundle\Service\Soap\Traits\RequestDateTime;
use Despark\MindbodyBundle\Service\Soap\Traits\RequestLastModifiedDate;

/**
 * Class GetClassesRequest
 */
class GetClassesRequest implements RequestInterface
{
    use DefaultRequestTrait, RequestDateTime, RequestLastModifiedDate;

    /**
     * @var int[]|null
     */
    private $ClassDescriptionIDs;

    /**
     * @var int[]|null
     */
    private $ClassIDs;

    /**
     * @var int[]|null
     */
    private $StaffIDs;

    /**
     * @var int|null
     */
    private $ClientID;

    /**
     * @var int[]|null
     */
    private $ProgramIDs;

    /**
     * @var int[]|null
     */
    private $SessionTypeIDs;

    /**
     * @var int[]|null
     */
    private $LocationIDs;

    /**
     * @var int[]|null
     */
    private $SemesterIDs;

    /**
     * @var bool|null
     */
    private $HideCanceledClasses;

    /**
     * @var bool|null
     */
    private $SchedulingWindow;

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
     * @return int|null
     */
    public function getClientID(): ?int
    {
        return $this->ClientID;
    }

    /**
     * @param int|null $ClientID
     */
    public function setClientID(?int $ClientID): void
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
     * @return int[]|null
     */
    public function getSemesterIDs(): ?array
    {
        return $this->SemesterIDs;
    }

    /**
     * @param int[]|null $SemesterIDs
     */
    public function setSemesterIDs(?array $SemesterIDs): void
    {
        $this->SemesterIDs = $SemesterIDs;
    }

    /**
     * @return bool|null
     */
    public function getHideCanceledClasses(): ?bool
    {
        return $this->HideCanceledClasses;
    }

    /**
     * @param bool|null $HideCanceledClasses
     */
    public function setHideCanceledClasses(?bool $HideCanceledClasses): void
    {
        $this->HideCanceledClasses = $HideCanceledClasses;
    }

    /**
     * @return bool|null
     */
    public function getSchedulingWindow(): ?bool
    {
        return $this->SchedulingWindow;
    }

    /**
     * @param bool|null $SchedulingWindow
     */
    public function setSchedulingWindow(?bool $SchedulingWindow): void
    {
        $this->SchedulingWindow = $SchedulingWindow;
    }
}