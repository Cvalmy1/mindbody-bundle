<?php

namespace Despark\MindbodyBundle\Model;

use Carbon\Carbon;
use Despark\MindbodyBundle\Model\Classes\ClassDescription;

/**
 * Class Enrollment
 * @package Despark\MindbodyBundle\Model
 */
class Enrollment
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $semesterId;

    /**
     * @var bool
     */
    protected $isAvailable;

    /**
     * @var \Despark\MindbodyBundle\Model\Classes\ClassDescription
     */
    protected $classDescription;

    /**
     * @var \Despark\MindbodyBundle\Model\WeekDays
     */
    protected $weekDays;

    /**
     * @var bool
     */
    protected $allowOpenEnrollment;

    /**
     * @var bool
     */
    protected $allowDateForwardEnrollment;

    /**
     * @var \Carbon\Carbon
     */
    protected $startDate;

    /**
     * @var \Carbon\Carbon
     */
    protected $endDate;

    /**
     * @var \Despark\MindbodyBundle\Model\Location
     */
    protected $location;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getSemesterId(): ?int
    {
        return $this->semesterId;
    }

    /**
     * @param int|null $semesterId
     */
    public function setSemesterId(?int $semesterId): void
    {
        $this->semesterId = $semesterId;
    }

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->isAvailable;
    }

    /**
     * @param bool $isAvailable
     */
    public function setIsAvailable(bool $isAvailable): void
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return \Despark\MindbodyBundle\Model\Classes\ClassDescription
     */
    public function getClassDescription(): ClassDescription
    {
        return $this->classDescription;
    }

    /**
     * @param \Despark\MindbodyBundle\Model\Classes\ClassDescription $classDescription
     */
    public function setClassDescription(ClassDescription $classDescription): void
    {
        $this->classDescription = $classDescription;
    }

    /**
     * @return \Despark\MindbodyBundle\Model\WeekDays
     */
    public function getWeekDays(): WeekDays
    {
        return $this->weekDays;
    }

    /**
     * @param \Despark\MindbodyBundle\Model\WeekDays $weekDays
     */
    public function setWeekDays(WeekDays $weekDays): void
    {
        $this->weekDays = $weekDays;
    }

    /**
     * @return bool
     */
    public function isAllowOpenEnrollment(): bool
    {
        return $this->allowOpenEnrollment;
    }

    /**
     * @param bool $allowOpenEnrollment
     */
    public function setAllowOpenEnrollment(bool $allowOpenEnrollment): void
    {
        $this->allowOpenEnrollment = $allowOpenEnrollment;
    }

    /**
     * @return bool
     */
    public function isAllowDateForwardEnrollment(): bool
    {
        return $this->allowDateForwardEnrollment;
    }

    /**
     * @param bool $allowDateForwardEnrollment
     */
    public function setAllowDateForwardEnrollment(bool $allowDateForwardEnrollment): void
    {
        $this->allowDateForwardEnrollment = $allowDateForwardEnrollment;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartDate(): Carbon
    {
        return $this->startDate;
    }

    /**
     * @param \Carbon\Carbon $startDate
     */
    public function setStartDate(Carbon $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEndDate(): Carbon
    {
        return $this->endDate;
    }

    /**
     * @param \Carbon\Carbon $endDate
     */
    public function setEndDate(Carbon $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return \Despark\MindbodyBundle\Model\Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param \Despark\MindbodyBundle\Model\Location $location
     */
    public function setLocation(Location $location): void
    {
        $this->location = $location;
    }
}