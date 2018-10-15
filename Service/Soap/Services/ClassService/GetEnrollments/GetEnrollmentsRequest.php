<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments;

use Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultRequestTrait;
use Despark\MindbodyBundle\Service\Soap\Traits\RequestDate;

/**
 * Class GetEnrollments
 * @package Despark\MindbodyBundle\Service\Soap\Services\ClassService
 */
class GetEnrollmentsRequest implements RequestInterface
{
    use DefaultRequestTrait, RequestDate;

    /**
     * @var int[]|null
     */
    protected $LocationIDs;

    /**
     * @var int[]|null
     */
    protected $ClassScheduleIDs;

    /**
     * @var int[]|null
     */
    protected $StaffIDs;

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
    protected $SemesterIDs;

    /**
     * @var int[]|null
     */
    protected $CourseIDs;

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
    public function getClassScheduleIDs(): ?array
    {
        return $this->ClassScheduleIDs;
    }

    /**
     * @param int[]|null $ClassScheduleIDs
     */
    public function setClassScheduleIDs(?array $ClassScheduleIDs): void
    {
        $this->ClassScheduleIDs = $ClassScheduleIDs;
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
     * @return int[]|null
     */
    public function getCourseIDs(): ?array
    {
        return $this->CourseIDs;
    }

    /**
     * @param int[]|null $CourseIDs
     */
    public function setCourseIDs(?array $CourseIDs): void
    {
        $this->CourseIDs = $CourseIDs;
    }
}