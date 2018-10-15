<?php

namespace Despark\MindbodyBundle\Service;


/**
 * Class SoapService
 * @package Despark\MindbodyBundle\Service
 */
interface SoapServiceInterface
{
    /**
     * @return mixed
     */
    public function getUri();

    /**
     * @return \SoapClient
     */
    public function getClient(): \SoapClient;

    /**
     * @return mixed
     */
    public function getVersion();

    /**
     * @param mixed $version
     */
    public function setVersion($version): void;

    /**
     * @param string $service
     * @return \Despark\MindbodyBundle\Service\SoapServiceInterface
     */
    public function setService(string $service): SoapServiceInterface;

    /**
     * @return string
     */
    public function getRequest(): string;

    /**
     * @return string
     */
    public function getResponse(): ?string;
}