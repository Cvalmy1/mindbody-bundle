<?php

namespace Despark\MindbodyBundle\Service\Soap\Traits;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class DefaultRequestTrait
 * @package Despark\MindbodyBundle\Service\Soap\Traits
 */
trait DefaultRequestTrait
{

    /**
     * @var
     * @Assert\Choice({"Bare","Basic","Full"})
     */
    protected $XMLDetail = 'Full';

    /**
     * @var int|null
     */
    protected $PageSize;

    /**
     * @var int|null
     */
    protected $CurrentPageIndex;

    /**
     * @var string[]|null
     */
    protected $Fields;

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
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->PageSize;
    }

    /**
     * @param int|null $PageSize
     */
    public function setPageSize(?int $PageSize): void
    {
        $this->PageSize = $PageSize;
    }

    /**
     * @return int|null
     */
    public function getCurrentPageIndex(): ?int
    {
        return $this->CurrentPageIndex;
    }

    /**
     * @param int|null $CurrentPageIndex
     */
    public function setCurrentPageIndex(?int $CurrentPageIndex): void
    {
        $this->CurrentPageIndex = $CurrentPageIndex;
    }

    /**
     * @return null|string[]
     */
    public function getFields(): ?array
    {
        return $this->Fields;
    }

    /**
     * @param null|string[] $Fields
     */
    public function setFields(?array $Fields): void
    {
        $this->Fields = $Fields;
    }
}