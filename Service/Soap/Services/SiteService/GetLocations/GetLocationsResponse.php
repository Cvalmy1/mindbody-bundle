<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\SiteService\GetLocations;

use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultResponseTrait;

class GetLocationsResponse implements ResponseInterface
{
    use DefaultResponseTrait;

    /**
     * @var \stdClass
     */
    protected $Locations;

    /**
     * @return array
     */
    public function getResultItems(): array
    {
        $result = [];
        if (isset($this->Locations->Location)) {
            if (is_object($this->Locations->Location)) {
                $result = [$this->Locations->Location];
            } elseif (is_array($this->Locations->Location)) {
                $result = $this->Locations->Location;
            }
        }

        return $result;
    }
}