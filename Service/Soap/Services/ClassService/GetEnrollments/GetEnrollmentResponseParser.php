<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments;

use Carbon\Carbon;
use Despark\MindbodyBundle\Collection\EnrollmentCollection;
use Despark\MindbodyBundle\Model\Classes\ClassDescription;
use Despark\MindbodyBundle\Model\Enrollment;
use Despark\MindbodyBundle\Model\Location;
use Despark\MindbodyBundle\Model\WeekDays;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Illuminate\Support\Collection;

/**
 * Class GetEnrollmentResponseParser
 * @package Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments
 */
class GetEnrollmentResponseParser implements ResponseParserInterface
{
    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface $response
     * @return \Illuminate\Support\Collection
     */
    public function parse(ResponseInterface $response): Collection
    {
        $items = $response->getResultItems();

        $collection = new EnrollmentCollection();

        foreach ($items as $item) {
            $collection->push($this->parseItem($item));
        }

        return $collection;
    }

    /**
     * @param $item
     * @return \Despark\MindbodyBundle\Model\Enrollment
     */
    private function parseItem($item): Enrollment
    {
        $enrollment = new Enrollment();
        $enrollment->setId($item->ID);
        $enrollment->setSemesterId($item->SemesterID);
        $enrollment->setIsAvailable($item->IsAvailable);
        $enrollment->setClassDescription($this->parseClassDescription($item->ClassDescription));

        $weekDays = $this->extractWeekDays($item);
        $enrollment->setWeekDays($weekDays);

        $enrollment->setAllowDateForwardEnrollment($item->AllowDateForwardEnrollment);
        $enrollment->setAllowOpenEnrollment($item->AllowOpenEnrollment);

        $enrollment->setStartDate(Carbon::parse($item->StartDate));
        $enrollment->setEndDate(Carbon::parse($item->EndDate));

        $enrollment->setLocation($this->parseLocation($item->Location));

        return $enrollment;
    }

    /**
     * @param $classDescription
     * @return \Despark\MindbodyBundle\Model\Classes\ClassDescription
     */
    private function parseClassDescription($classDescription): ClassDescription
    {
        $classDescriptionClass = new ClassDescription();
        $classDescriptionClass->setID($classDescription->ID);
        $classDescriptionClass->setName($classDescription->Name);
        $classDescriptionClass->setDescription($classDescription->Description);

        return $classDescriptionClass;
    }

    /**
     * @param $location
     * @return \Despark\MindbodyBundle\Model\Location
     */
    private function parseLocation($location): Location
    {
        $locationClass = new Location();

        $locationClass->setID($location->ID);
        $locationClass->setSiteID($location->SiteID);
        $locationClass->setName($location->Name);

        return $locationClass;
    }

    /**
     * @param $item
     * @return \Despark\MindbodyBundle\Model\WeekDays
     */
    private function extractWeekDays($item): WeekDays
    {
        $dayAccessors = [
            'DayMonday',
            'DayTuesday',
            'DayWednesday',
            'DayThursday',
            'DayFriday',
            'DaySaturday',
            'DaySunday',
        ];

        $weekDays = [];
        foreach ($dayAccessors as $key => $property) {
            if ($item->{$property} === true) {
                $weekDays[] = $key + 1;
            }
        }

        return new WeekDays($weekDays);
    }
}