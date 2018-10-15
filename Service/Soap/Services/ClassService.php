<?php

namespace Despark\MindbodyBundle\Service\Soap\Services;

use Despark\MindbodyBundle\Service\Soap\Interfaces\MindbodyServiceInterface;
use Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultSoapServiceTrait;

/**
 * Class ClassService
 * @package Despark\MindbodyBundle\Service
 */
class ClassService implements MindbodyServiceInterface
{
    const SERVICE_NAME = 'ClassService';

    use DefaultSoapServiceTrait;

    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments
     */
    private $getEnrollments;

    /**
     * ClassService constructor.
     * @param \Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments $getEnrollments
     */
    public function __construct(GetEnrollments $getEnrollments)
    {
        $this->getEnrollments = $getEnrollments;
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetEnrollments
     */
    public function getEnrollmentsMethod(): GetEnrollments
    {
        return $this->getEnrollments;
    }
}