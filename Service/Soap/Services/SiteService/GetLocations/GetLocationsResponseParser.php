<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\SiteService\GetLocations;

use Despark\MindbodyBundle\Model\Location;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Illuminate\Support\Collection;

class GetLocationsResponseParser implements ResponseParserInterface
{

    public function parse(ResponseInterface $response): Collection
    {

        $items = $response->getResultItems();
        $collection = new Collection();

        foreach ($items as $item) {
            $location = new Location();

            $location->setId($item->ID);
            $location->setName($item->Name);
            $location->setSiteId($item->SiteID);

            $collection->push($location);
        }

        return $collection;
    }
}