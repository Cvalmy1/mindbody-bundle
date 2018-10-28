<?php

namespace Despark\MindbodyBundle\Model;

use Despark\MindbodyBundle\Model\Classes\ClassDescription;

/**
 * Interface MindbodyClassInterface
 * @package Despark\MindbodyBundle\Model
 */
interface MindbodyClassInterface
{
    /**
     * @return int
     */
    public function getID(): int;

    /**
     * @param int $ID
     */
    public function setID(int $ID): void;

    /**
     * @return int
     */
    public function getClassScheduleID(): int;

    /**
     * @param int $ClassScheduleID
     */
    public function setClassScheduleID(int $ClassScheduleID): void;

    /**
     * @return \Despark\MindbodyBundle\Model\Location
     */
    public function getLocation(): Location;

    /**
     * @param \Despark\MindbodyBundle\Model\Location $Location
     */
    public function setLocation(Location $Location): void;

    /**
     * @return int
     */
    public function getMaxCapacity(): int;

    /**
     * @param int $MaxCapacity
     */
    public function setMaxCapacity(int $MaxCapacity): void;

    /**
     * @return int
     */
    public function getWebCapacity(): int;

    /**
     * @param int $WebCapacity
     */
    public function setWebCapacity(int $WebCapacity): void;

    /**
     * @return int
     */
    public function getTotalBooked(): int;

    /**
     * @param int $TotalBooked
     */
    public function setTotalBooked(int $TotalBooked): void;

    /**
     * @return int
     */
    public function getTotalBookedWaitlist(): int;

    /**
     * @param int $TotalBookedWaitlist
     */
    public function setTotalBookedWaitlist(int $TotalBookedWaitlist): void;

    /**
     * @return int
     */
    public function getWebBooked(): int;

    /**
     * @param int $WebBooked
     */
    public function setWebBooked(int $WebBooked): void;

    /**
     * @return int|null
     */
    public function getSemesterID(): ?int;

    /**
     * @param int|null $SemesterID
     */
    public function setSemesterID(?int $SemesterID): void;

    /**
     * @return bool
     */
    public function isCanceled(): bool;

    /**
     * @param bool $IsCanceled
     */
    public function setIsCanceled(bool $IsCanceled): void;

    /**
     * @return bool
     */
    public function isSubstitute(): bool;

    /**
     * @param bool $Substitute
     */
    public function setSubstitute(bool $Substitute): void;

    /**
     * @return bool
     */
    public function isActive(): bool;

    /**
     * @param bool $Active
     */
    public function setActive(bool $Active): void;

    /**
     * @return bool
     */
    public function isWaitlistAvailable(): bool;

    /**
     * @param bool $IsWaitlistAvailable
     */
    public function setIsWaitlistAvailable(bool $IsWaitlistAvailable): void;

    /**
     * @return bool
     */
    public function isEnrolled(): bool;

    /**
     * @param bool $IsEnrolled
     */
    public function setIsEnrolled(bool $IsEnrolled): void;

    /**
     * @return bool
     */
    public function isHideCancel(): bool;

    /**
     * @param bool $HideCancel
     */
    public function setHideCancel(bool $HideCancel): void;

    /**
     * @return bool
     */
    public function isAvailable(): bool;

    /**
     * @param bool $IsAvailable
     */
    public function setIsAvailable(bool $IsAvailable): void;

    /**
     * @return \Despark\MindbodyBundle\Model\Classes\ClassDescription
     */
    public function getClassDescription(): ClassDescription;

    /**
     * @param \Despark\MindbodyBundle\Model\Classes\ClassDescription $ClassDescription
     */
    public function setClassDescription(ClassDescription $ClassDescription): void;

    /**
     * @return \Despark\MindbodyBundle\Model\StaffInterface
     */
    public function getStaff(): StaffInterface;

    /**
     * @param \Despark\MindbodyBundle\Model\StaffInterface $Staff
     */
    public function setStaff(StaffInterface $Staff): void;

    /**
     * @return string
     */
    public function getStartDateTime(): string;

    /**
     * @param \DateTimeInterface $StartDateTime
     * @param string $format
     */
    public function setStartDateTime(\DateTimeInterface $StartDateTime, string $format): void;

    /**
     * @return string
     */
    public function getEndDateTime(): string;

    /**
     * @param \DateTimeInterface $EndDateTime
     * @param string $format
     */
    public function setEndDateTime(\DateTimeInterface $EndDateTime, string $format): void;

    /**
     * @return null|string
     */
    public function getLastModifiedDateTime(): ?string;

    /**
     * @param \DateTimeInterface|null $LastModifiedDateTime
     * @param string $format
     */
    public function setLastModifiedDateTime(?\DateTimeInterface $LastModifiedDateTime, string $format): void;
}