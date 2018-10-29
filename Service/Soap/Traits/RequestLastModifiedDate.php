<?php

namespace Despark\MindbodyBundle\Service\Soap\Traits;

/**
 * Trait RequestLastModifiedDate
 * @package Despark\MindbodyBundle\Service\Soap\Traits
 */
trait RequestLastModifiedDate
{
    /**
     * @var string
     */
    private $lastModifiedDateFormat = 'Y-m-d';

    /**
     * @var string
     */
    private $LastModifiedDate;

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->LastModifiedDate;
    }

    /**
     * @param \DateTimeInterface $LastModifiedDate
     */
    public function setLastModifiedDate(\DateTimeInterface $LastModifiedDate): void
    {
        $this->LastModifiedDate = $LastModifiedDate->format($this->lastModifiedDateFormat);
    }
}