<?php

namespace Despark\MindbodyBundle\Service\Soap\Interfaces;

/**
 * Class RequestInterface
 * @package Despark\MindbodyBundle\Service\Soap
 */
interface RequestInterface
{
    /**
     * @return mixed
     */
    public function getXMLDetail();

    /**
     * @param mixed $XMLDetail
     */
    public function setXMLDetail($XMLDetail): void;

    /**
     * @return int|null
     */
    public function getPageSize(): ?int;

    /**
     * @param int|null $PageSize
     */
    public function setPageSize(?int $PageSize): void;

    /**
     * @return int|null
     */
    public function getCurrentPageIndex(): ?int;

    /**
     * @param int|null $CurrentPageIndex
     */
    public function setCurrentPageIndex(?int $CurrentPageIndex): void;

    /**
     * @return null|string[]
     */
    public function getFields(): ?array;

    /**
     * @param null|string[] $Fields
     */
    public function setFields(?array $Fields): void;

}