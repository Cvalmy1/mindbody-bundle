<?php

namespace Despark\MindbodyBundle\Service\Soap\Traits;

/**
 * Trait RequestLastModifiedDate
 * @package Despark\MindbodyBundle\Service\Soap\Traits
 */
trait RequestLastModifiedDateTime
{
    /**
     * @var string
     */
    private $LastModifiedDateTime;

    /**
     * @return string
     */
    public function getLastModifiedDateTime(): string
    {
        return $this->LastModifiedDateTime;
    }

    /**
     * @param \DateTimeInterface $LastModifiedDateTime
     * @param string $format
     * TODO Fix format
     */
    public function setLastModifiedDateTime(
        \DateTimeInterface $LastModifiedDateTime,
        string $format = 'Y-m-d\TH:i:s'
    ): void {
        $this->LastModifiedDateTime = $LastModifiedDateTime->format($format);
    }
}