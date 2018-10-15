<?php

namespace Despark\MindbodyBundle\Service\Soap\Traits;

/**
 * Class RequestDateTime
 * @package Despark\MindbodyBundle\Service\Soap\Traits
 */
trait RequestDate
{
    /**
     * @var string
     */
    private $dateFormat = 'Y-m-d';

    /**
     * @var string|null
     */
    protected $StartDate;

    /**
     * @var string|null
     */
    protected $EndDate;

    /**
     * @return null|string
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }

    /**
     * @param \DateTimeInterface $StartDate
     */
    public function setStartDate(\DateTimeInterface $StartDate): void
    {
        $this->StartDate = $StartDate->format($this->dateFormat);
    }

    /**
     * @return null|string
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }

    /**
     * @param \DateTimeInterface $EndDate
     */
    public function setEndDate(\DateTimeInterface $EndDate): void
    {
        $this->EndDate = $EndDate->format($this->dateFormat);
    }

    /**
     * @param string $dateFormat
     */
    public function setDateFormat(string $dateFormat): void
    {
        $this->dateFormat = $dateFormat;
    }
}