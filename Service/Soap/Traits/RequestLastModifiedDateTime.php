<?php

namespace Despark\MindbodyBundle\Service\Soap\Traits;

/**
 * Trait RequestLastModifiedDate
 * @package Despark\MindbodyBundle\Service\Soap\Traits
 */
trait RequestLastModifiedDateTime
{
    private $lastModifiedDateTimeFormat = 'Y-m-d\TH:i:s';

    /**
     * @var string|null
     */
    private $LastModifiedDateTime;

    /**
     * @return null|string
     */
    public function getLastModifiedDate(): ?string
    {
        return $this->LastModifiedDateTime;
    }

    /**
     * @param \DateTimeInterface|null $LastModifiedDateTime
     */
    public function setLastModifiedDate(?\DateTimeInterface $LastModifiedDateTime): void
    {
        $this->LastModifiedDateTime = $LastModifiedDateTime->format($this->lastModifiedDateTimeFormat);
    }
}