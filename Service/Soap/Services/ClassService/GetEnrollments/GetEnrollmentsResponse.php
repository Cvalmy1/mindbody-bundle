<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments;

use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultResponseTrait;

/**
 * Class GetEnrollmentsResult
 * @package Despark\MindbodyBundle\Service\Soap\Services\ClassService
 */
class GetEnrollmentsResponse implements ResponseInterface
{
    use DefaultResponseTrait;

    /**
     * @var \stdClass
     */
    protected $Enrollments;

    /**
     * @return array
     */
    public function getResultItems(): array
    {
        $result = [];
        if (isset($this->Enrollments->ClassSchedule)) {
            if (is_object($this->Enrollments->ClassSchedule)) {
                $result = [$this->Enrollments->ClassSchedule];
            } elseif (is_array($this->Enrollments->ClassSchedule)) {
                $result = $this->Enrollments->ClassSchedule;
            }
        }

        return $result;
    }
}