<?php

namespace Despark\MindbodyBundle\Service;


/**
 * Class SoapService
 * @package Despark\MindbodyBundle\Service
 */
interface SoapServiceInterface
{
    /**
     * @return string
     */
    public function getUri(): string;

    /**
     * @return \SoapClient
     */
    public function getClient(): \SoapClient;

    /**
     * @return string
     */
    public function getVersion(): string;

    /**
     * @param string $version
     */
    public function setVersion(string $version): void;

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