<?php

namespace Despark\MindbodyBundle\Service\Soap;

/**
 * Class SoapAuthentication
 * @package Despark\MindbodyBundle\Service\Soap
 */
class SoapAuthentication
{

    /**
     * @var string
     */
    private $apiKey;
    /**
     * @var string
     */
    private $siteId;

    /**
     * SoapAuthentication constructor.
     * @param string $apiKey
     * @param string $siteId
     */
    public function __construct(string $siteId, string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->siteId = $siteId;
    }

    /**
     * @return string
     */
    public function getHeaders(): string
    {
        return sprintf('SiteID: %d'.PHP_EOL.'API-key: %s', $this->siteId, $this->apiKey);
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getSiteId(): string
    {
        return $this->siteId;
    }
}