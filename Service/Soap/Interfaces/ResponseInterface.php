<?php

namespace Despark\MindbodyBundle\Service\Soap\Interfaces;

/**
 * Class MindBodyResponseInterface
 * @package Despark\MindbodyBundle\Service\Soap
 */
interface ResponseInterface
{

    public function hasFailed(): bool;

    public function getResultItems(): array;

}