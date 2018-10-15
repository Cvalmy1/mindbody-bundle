<?php

namespace Despark\MindbodyBundle\Service\Soap\Services;

use Despark\MindbodyBundle\Service\Soap\Interfaces\MindbodyServiceInterface;
use Despark\MindbodyBundle\Service\Soap\Services\SiteService\GetLocations;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultSoapServiceTrait;

/**
 * Class SiteService
 * @package Despark\MindbodyBundle\Service\Soap\Services
 */
class SiteService implements MindbodyServiceInterface
{
    use DefaultSoapServiceTrait;

    const SERVICE_NAME = 'SiteService';
    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Services\SiteService\GetLocations
     */
    private $getLocations;


    public function __construct(GetLocations $getLocations)
    {
        $this->getLocations = $getLocations;
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Services\SiteService\GetLocations
     */
    public function getLocationsMethod(): GetLocations
    {
        return $this->getLocations;
    }
}