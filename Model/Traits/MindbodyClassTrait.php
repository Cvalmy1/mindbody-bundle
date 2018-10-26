<?php


namespace Despark\MindbodyBundle\Model\Traits;

use Despark\MindbodyBundle\Model\Classes\ClassDescription;
use Despark\MindbodyBundle\Model\Location;
use Despark\MindbodyBundle\Model\StaffInterface;

/**
 * Trait MindbodyClassTrait
 * @package Despark\MindbodyBundle\Model\Traits
 */
trait MindbodyClassTrait
{
    /**
     * @var int
     */
    private $ID;

    /**
     * @var int
     */
    private $ClassScheduleID;

    /**
     * @var \Despark\MindbodyBundle\Model\Location
     */
    private $Location;

    /**
     * @var int
     */
    private $MaxCapacity;

    /**
     * @var int
     */
    private $WebCapacity;

    /**
     * @var int
     */
    private $TotalBooked;

    /**
     * @var int
     */
    private $TotalBookedWaitlist;

    /**
     * @var int
     */
    private $WebBooked;

    /**
     * @var int|null
     */
    private $SemesterID;

    /**
     * @var bool
     */
    private $IsCanceled;

    /**
     * @var bool
     */
    private $Substitute;

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var bool
     */
    private $IsWaitlistAvailable;

    /**
     * @var bool
     */
    private $IsEnrolled;

    /**
     * @var bool
     */
    private $HideCancel;

    /**
     * @var bool
     */
    private $IsAvailable;

    /**
     * @var \Despark\MindbodyBundle\Model\Classes\ClassDescription
     */
    private $ClassDescription;

    /**
     * @var \Despark\MindbodyBundle\Model\StaffInterface
     */
    private $Staff;

    /**
     * @var string|null
     */
    private $StartDateTime;

    /**
     * @var string|null
     */
    private $EndDateTime;

    /**
     * @var string|null
     */
    private $LastModifiedDateTime;

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     */
    public function setID(int $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return int
     */
    public function getClassScheduleID(): int
    {
        return $this->ClassScheduleID;
    }

    /**
     * @param int $ClassScheduleID
     */
    public function setClassScheduleID(int $ClassScheduleID): void
    {
        $this->ClassScheduleID = $ClassScheduleID;
    }

    /**
     * @return \Despark\MindbodyBundle\Model\Location
     */
    public function getLocation(): Location
    {
        return $this->Location;
    }

    /**
     * @param \Despark\MindbodyBundle\Model\Location $Location
     */
    public function setLocation(Location $Location): void
    {
        $this->Location = $Location;
    }

    /**
     * @return int
     */
    public function getMaxCapacity(): int
    {
        return $this->MaxCapacity;
    }

    /**
     * @param int $MaxCapacity
     */
    public function setMaxCapacity(int $MaxCapacity): void
    {
        $this->MaxCapacity = $MaxCapacity;
    }

    /**
     * @return int
     */
    public function getWebCapacity(): int
    {
        return $this->WebCapacity;
    }

    /**
     * @param int $WebCapacity
     */
    public function setWebCapacity(int $WebCapacity): void
    {
        $this->WebCapacity = $WebCapacity;
    }

    /**
     * @return int
     */
    public function getTotalBooked(): int
    {
        return $this->TotalBooked;
    }

    /**
     * @param int $TotalBooked
     */
    public function setTotalBooked(int $TotalBooked): void
    {
        $this->TotalBooked = $TotalBooked;
    }

    /**
     * @return int
     */
    public function getTotalBookedWaitlist(): int
    {
        return $this->TotalBookedWaitlist;
    }

    /**
     * @param int $TotalBookedWaitlist
     */
    public function setTotalBookedWaitlist(int $TotalBookedWaitlist): void
    {
        $this->TotalBookedWaitlist = $TotalBookedWaitlist;
    }

    /**
     * @return int
     */
    public function getWebBooked(): int
    {
        return $this->WebBooked;
    }

    /**
     * @param int $WebBooked
     */
    public function setWebBooked(int $WebBooked): void
    {
        $this->WebBooked = $WebBooked;
    }

    /**
     * @return int|null
     */
    public function getSemesterID(): ?int
    {
        return $this->SemesterID;
    }

    /**
     * @param int|null $SemesterID
     */
    public function setSemesterID(?int $SemesterID): void
    {
        $this->SemesterID = $SemesterID;
    }

    /**
     * @return bool
     */
    public function isCanceled(): bool
    {
        return $this->IsCanceled;
    }

    /**
     * @param bool $IsCanceled
     */
    public function setIsCanceled(bool $IsCanceled): void
    {
        $this->IsCanceled = $IsCanceled;
    }

    /**
     * @return bool
     */
    public function isSubstitute(): bool
    {
        return $this->Substitute;
    }

    /**
     * @param bool $Substitute
     */
    public function setSubstitute(bool $Substitute): void
    {
        $this->Substitute = $Substitute;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->Active;
    }

    /**
     * @param bool $Active
     */
    public function setActive(bool $Active): void
    {
        $this->Active = $Active;
    }

    /**
     * @return bool
     */
    public function isWaitlistAvailable(): bool
    {
        return $this->IsWaitlistAvailable;
    }

    /**
     * @param bool $IsWaitlistAvailable
     */
    public function setIsWaitlistAvailable(bool $IsWaitlistAvailable): void
    {
        $this->IsWaitlistAvailable = $IsWaitlistAvailable;
    }

    /**
     * @return bool
     */
    public function isEnrolled(): bool
    {
        return $this->IsEnrolled;
    }

    /**
     * @param bool $IsEnrolled
     */
    public function setIsEnrolled(bool $IsEnrolled): void
    {
        $this->IsEnrolled = $IsEnrolled;
    }

    /**
     * @return bool
     */
    public function isHideCancel(): bool
    {
        return $this->HideCancel;
    }

    /**
     * @param bool $HideCancel
     */
    public function setHideCancel(bool $HideCancel): void
    {
        $this->HideCancel = $HideCancel;
    }

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->IsAvailable;
    }

    /**
     * @param bool $IsAvailable
     */
    public function setIsAvailable(bool $IsAvailable): void
    {
        $this->IsAvailable = $IsAvailable;
    }

    /**
     * @return \Despark\MindbodyBundle\Model\Classes\ClassDescription
     */
    public function getClassDescription(): ClassDescription
    {
        return $this->ClassDescription;
    }

    /**
     * @param \Despark\MindbodyBundle\Model\Classes\ClassDescription $ClassDescription
     */
    public function setClassDescription(ClassDescription $ClassDescription): void
    {
        $this->ClassDescription = $ClassDescription;
    }

    /**
     * @return \Despark\MindbodyBundle\Model\StaffInterface
     */
    public function getStaff(): StaffInterface
    {
        return $this->Staff;
    }

    /**
     * @param \Despark\MindbodyBundle\Model\StaffInterface $Staff
     */
    public function setStaff(StaffInterface $Staff): void
    {
        $this->Staff = $Staff;
    }

    /**
     * @return null|string
     */
    public function getStartDateTime(): ?string
    {
        return $this->StartDateTime;
    }

    /**
     * @param \DateTimeInterface $StartDateTime
     * @param string $format
     */
    public function setStartDateTime(\DateTimeInterface $StartDateTime, string $format = 'Y-m-d\TH:i:s'): void
    {
        if (!is_null($StartDateTime)) {
            $this->StartDateTime = $StartDateTime->format($format);
        }
    }

    /**
     * @return null|string
     */
    public function getEndDateTime(): ?string
    {
        return $this->EndDateTime;
    }

    /**
     * @param \DateTimeInterface $EndDateTime
     * @param string $format
     */
    public function setEndDateTime(\DateTimeInterface $EndDateTime, string $format = 'Y-m-d\TH:i:s'): void
    {
        if (!is_null($EndDateTime)) {
            $this->EndDateTime = $EndDateTime->format($format);
        }
    }

    /**
     * @return null|string
     */
    public function getLastModifiedDateTime(): ?string
    {
        return $this->LastModifiedDateTime;
    }

    /**
     * @param \DateTimeInterface|null $LastModifiedDateTime
     * @param string $format
     * TODO fix format
     */
    public function setLastModifiedDateTime(
        ?\DateTimeInterface $LastModifiedDateTime,
        string $format = 'Y-m-d\TH:i:s'
    ): void {
        if (!is_null($LastModifiedDateTime)) {
            $this->LastModifiedDateTime = $LastModifiedDateTime->format($format);
        }
    }
}