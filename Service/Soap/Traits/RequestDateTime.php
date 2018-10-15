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
     */
    public function setStartDateTime(\DateTimeInterface $StartDateTime): void
    {
        $this->StartDateTime = $StartDateTime->format(DATE_ATOM);
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
     */
    public function setEndDateTime(\DateTimeInterface $EndDateTime): void
    {
        $this->EndDateTime = $EndDateTime->format(DATE_ATOM);
    }
}