<?php

namespace Despark\MindbodyBundle\Service\Soap\Services;

use Despark\MindbodyBundle\Service\Soap\Interfaces\MindbodyServiceInterface;
use Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetClasses;
use Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultSoapServiceTrait;

/**
 * Class ClassService
 * @package Despark\MindbodyBundle\Service
 */
class ClassService implements MindbodyServiceInterface
{
    use DefaultSoapServiceTrait;

    const SERVICE_NAME = 'ClassService';

    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments
     */
    private $getEnrollments;

    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetClasses
     */
    private $getClasses;

    /**
     * ClassService constructor.
     * @param \Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments $getEnrollments
     * @param \Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetClasses $getClasses
     */
    public function __construct(GetEnrollments $getEnrollments, GetClasses $getClasses)
    {
        $this->getEnrollments = $getEnrollments;
        $this->getClasses = $getClasses;
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments
     */
    public function getEnrollmentsMethod(): GetEnrollments
    {
        return $this->getEnrollments;
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetClasses
     */
    public function getGetClassesMethod(): GetClasses
    {
        return $this->getClasses;
    }
}