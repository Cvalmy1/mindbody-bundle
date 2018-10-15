<?php

namespace Despark\MindbodyBundle\Service;

use Despark\MindbodyBundle\Exceptions\ServiceNotFoundException;
use Despark\MindbodyBundle\Service\Soap\Interfaces\MindbodyServiceInterface;

/**
 * Class MindBodyServiceManager
 * @package Despark\MindbodyBundle\Service
 */
class MindBodyServiceManager
{

    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Interfaces\MindbodyServiceInterface[]
     */
    private $services = [];


    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\MindbodyServiceInterface $service
     */
    public function addService(MindbodyServiceInterface $service)
    {
        $this->services[get_class($service)] = $service;
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Interfaces\MindbodyServiceInterface[]
     */
    public function allServices()
    {
        return $this->services;
    }

    /**
     * @param $name
     * @return \Despark\MindbodyBundle\Service\Soap\Interfaces\MindbodyServiceInterface
     * @throws \Despark\MindbodyBundle\Exceptions\ServiceNotFoundException
     */
    public function getService($name): MindbodyServiceInterface
    {
        if (isset($this->services[$name])) {
            return $this->services[$name];
        }

        throw new ServiceNotFoundException(sprintf('Service %s not registered', $name));
    }
}