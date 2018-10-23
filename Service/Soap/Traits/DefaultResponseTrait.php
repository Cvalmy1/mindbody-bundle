<?php

namespace Despark\MindbodyBundle\Service\Soap\Traits;

/**
 * Class DefaultResponseTrait
 * @package Despark\MindbodyBundle\Service\Soap\Traits
 */
trait DefaultResponseTrait
{

    protected $Status;

    protected $ErrorCode;

    protected $XMLDetail;

    protected $ResultCount;

    protected $CurrentPageIndex;

    protected $TotalPageCount;

    /**
     * @return string
     */
    abstract function resultRootKey(): string;

    /**
     * @return string
     */
    abstract function resultItemKey(): string;

    /**
     * @return array
     */
    public function getResultItems(): array
    {
        $result = [];
        $rootKey = $this->resultRootKey();
        $itemKey = $this->resultItemKey();

        if ($rootKey && $itemKey) {
            if (isset($this->{$rootKey}->{$itemKey})) {
                if (is_object($this->{$rootKey}->{$itemKey})) {
                    $result = [$this->{$rootKey}->{$itemKey}];
                } elseif (is_array($this->{$rootKey}->{$itemKey})) {
                    $result = $this->{$rootKey}->{$itemKey};
                }
            }
        }

        return $result;
    }


    /**
     * @return bool
     */
    public function hasFailed(): bool
    {
        return $this->getErrorCode() != 200;
    }

    public function getRequest(): string
    {
        // todo
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param mixed $Status
     */
    public function setStatus($Status): void
    {
        $this->Status = $Status;
    }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }

    /**
     * @param mixed $ErrorCode
     */
    public function setErrorCode($ErrorCode): void
    {
        $this->ErrorCode = $ErrorCode;
    }

    /**
     * @return mixed
     */
    public function getXMLDetail()
    {
        return $this->XMLDetail;
    }

    /**
     * @param mixed $XMLDetail
     */
    public function setXMLDetail($XMLDetail): void
    {
        $this->XMLDetail = $XMLDetail;
    }

    /**
     * @return mixed
     */
    public function getResultCount()
    {
        return $this->ResultCount;
    }

    /**
     * @param mixed $ResultCount
     */
    public function setResultCount($ResultCount): void
    {
        $this->ResultCount = $ResultCount;
    }

    /**
     * @return mixed
     */
    public function getCurrentPageIndex()
    {
        return $this->CurrentPageIndex;
    }

    /**
     * @param mixed $CurrentPageIndex
     */
    public function setCurrentPageIndex($CurrentPageIndex): void
    {
        $this->CurrentPageIndex = $CurrentPageIndex;
    }

    /**
     * @return mixed
     */
    public function getTotalPageCount()
    {
        return $this->TotalPageCount;
    }

    /**
     * @param mixed $TotalPageCount
     */
    public function setTotalPageCount($TotalPageCount): void
    {
        $this->TotalPageCount = $TotalPageCount;
    }
}