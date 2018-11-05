<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClientService\GetClients;

use Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultRequestTrait;

/**
 * Class GetClientsRequest
 */
class GetClientsRequest implements RequestInterface
{
    use DefaultRequestTrait;

    /**
     * Filters the results down to clients where the text matches all or part of their first name, last name, or email
     * address. Because this field is not optional, you can pass it as an empty string if you want to find all clients
     * at the subscriber's business.
     *
     * @var string
     */
    private $SearchText = '';

    /**
     * @var array|null
     */
    private $ClientIds;

    /**
     * @var bool|null
     */
    private $IsProspect;

    /**
     * @var \DateTimeInterface|null
     */
    private $LastModifiedDate;

    /**
     * @return string
     */
    public function getSearchText(): string
    {
        return $this->SearchText;
    }

    /**
     * @param string $SearchText
     */
    public function setSearchText(string $SearchText): void
    {
        $this->SearchText = $SearchText;
    }

    /**
     * @return array|null
     */
    public function getClientIds(): ?array
    {
        return $this->ClientIds;
    }

    /**
     * @param array|null $ClientIds
     */
    public function setClientIds(?array $ClientIds): void
    {
        $this->ClientIds = $ClientIds;
    }

    /**
     * @return bool|null
     */
    public function getisProspect(): ?bool
    {
        return $this->IsProspect;
    }

    /**
     * @param bool|null $IsProspect
     */
    public function setIsProspect(?bool $IsProspect): void
    {
        $this->IsProspect = $IsProspect;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getLastModifiedDate(): ?\DateTimeInterface
    {
        return $this->LastModifiedDate;
    }

    /**
     * @param \DateTimeInterface|null $LastModifiedDate
     */
    public function setLastModifiedDate(?\DateTimeInterface $LastModifiedDate): void
    {
        $this->LastModifiedDate = $LastModifiedDate;
    }
}