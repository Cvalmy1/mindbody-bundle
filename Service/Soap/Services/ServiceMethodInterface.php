<?php

namespace Despark\MindbodyBundle\Service\Soap\Services;

use Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\SoapServiceInterface;
use Illuminate\Support\Collection;

/**
 * Class ServiceMethodInterface
 * @package Despark\MindbodyBundle\Service\Soap\Services
 */
interface ServiceMethodInterface
{
    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface $request
     * @return mixed
     */
    public function execute(RequestInterface $request): ServiceMethodInterface;

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface|null
     */
    public function getResponse(): ?ResponseInterface;

    /**
     * @return \stdClass|null
     */
    public function getRawResponse(): ?\stdClass;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getResult(): Collection;

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface
     */
    public function getRequest(): RequestInterface;

    /**
     * @return string
     */
    public function getExecutedRequest(): string;

    /**
     * @return string
     */
    public static function getServiceName(): string;

    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface $responseParser
     */
    public function setResponseParser(ResponseParserInterface $responseParser): void;

    /**
     * @param \Despark\MindbodyBundle\Service\SoapServiceInterface $soapService
     */
    public function setSoapService(SoapServiceInterface $soapService): void;
}