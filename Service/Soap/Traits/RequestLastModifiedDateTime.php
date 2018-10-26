<?php

namespace Despark\MindbodyBundle\Service\Soap\Traits;

/**
 * Trait RequestLastModifiedDate
 * @package Despark\MindbodyBundle\Service\Soap\Traits
 */
trait RequestLastModifiedDateTime
{
    /**
     * @var string|null
     */
    private $LastModifiedDateTime;

    /**
     * @return null|string
     */
    public function getLastModifiedDateTime(): ?string
    {
        return $this->LastModifiedDateTime;
    }

    /**
     * @param \DateTimeInterface|null $LastModifiedDateTime
     * @param string $format
     * TODO Fix format
     */
    public function setLastModifiedDateTime(
        ?\DateTimeInterface $LastModifiedDateTime,
        string $format = 'Y-m-d\TH:i:s'
    ): void {
        if (!is_null($LastModifiedDateTime)) {
            $this->LastModifiedDateTime = $LastModifiedDateTime->format($format);
        }
    }
}