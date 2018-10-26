<?php

namespace Despark\MindbodyBundle\Service\Soap\Traits;

/**
 * Class RequestDateTime
 * @package Despark\MindbodyBundle\Service\Soap\Traits
 */
trait RequestDateTime
{
    /**
     * @var string|null
     */
    protected $StartDateTime;

    /**
     * @var string|null
     */
    protected $EndDateTime;

    /**
     * @return null|string
     */
    public function getStartDateTime(): ?string
    {
        return $this->StartDateTime;
    }

    /**
     * @param \DateTimeInterface $StartDateTime
     * @param string $format
     */
    public function setStartDateTime(\DateTimeInterface $StartDateTime, string $format = 'Y-m-d\TH:i:s'): void
    {
        if (!is_null($StartDateTime)) {
            $this->StartDateTime = $StartDateTime->format($format);
        }
    }

    /**
     * @return null|string
     */
    public function getEndDateTime(): ?string
    {
        return $this->EndDateTime;
    }

    /**
     * @param \DateTimeInterface $EndDateTime
     * @param string $format
     */
    public function setEndDateTime(\DateTimeInterface $EndDateTime, string $format = 'Y-m-d\TH:i:s'): void
    {
        if (!is_null($EndDateTime)) {
            $this->EndDateTime = $EndDateTime->format($format);
        }
    }
}