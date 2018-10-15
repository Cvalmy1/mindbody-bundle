<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\SiteService;

/**
 * Class GetSites
 * @package Despark\MindbodyBundle\Service\Soap\Services\SiteService
 */
class GetSitesRequest
{
    /**
     * @var \stdClass
     */
    private $SourceCredentials;

    public function __construct(array $siteIds = [0]) {
        $this->SourceCredentials = new \stdClass();
        $this->SourceCredentials->SiteIDs = $siteIds;
    }

}