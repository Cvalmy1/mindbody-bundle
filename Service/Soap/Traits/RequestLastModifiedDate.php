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
    private $lastModifiedDateFormat = 'd-m-Y';

    /**
     * @var string|null
     */
    private $LastModifiedDate;

    /**
     * @return null|string
     */
    public function getLastModifiedDate(): ?string
    {
        return $this->LastModifiedDate;
    }

    /**
     * @param \DateTimeInterface|null $LastModifiedDate
     */
    public function setLastModifiedDate(?\DateTimeInterface $LastModifiedDate): void
    {
        $this->LastModifiedDate = $LastModifiedDate->format($this->lastModifiedDateFormat);
    }
}