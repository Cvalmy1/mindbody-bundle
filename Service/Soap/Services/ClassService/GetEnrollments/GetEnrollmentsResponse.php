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
     * @return string
     */
    public function resultRootKey(): string
    {
        return 'Enrollments';
    }

    /**
     * @return string
     */
    public function resultItemKey(): string
    {
        return 'ClassSchedule';
    }
}