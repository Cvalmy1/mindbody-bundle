<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClientService\Parsers;

use Despark\MindbodyBundle\Model\ClientInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper;
use Illuminate\Support\Collection;

/**
 * Class GetClientsResponseParser
 */
class GetClientsResponseParser implements ResponseParserInterface
{
    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper
     */
    private $helper;

    /**
     * @var \Despark\MindbodyBundle\Model\ClientInterface
     */
    private $client;

    /**
     * GetClassesResponseParser constructor.
     * @param \Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper $helper
     * @param \Despark\MindbodyBundle\Model\ClientInterface $client
     */
    public function __construct(ResponseHelper $helper, ClientInterface $client)
    {
        $this->helper = $helper;
        $this->client = $client;
    }

    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface $response
     * @return \Illuminate\Support\Collection
     * @throws \Despark\MindbodyBundle\Exceptions\ResponseException
     */
    public function parse(ResponseInterface $response): Collection
    {
        $items = $response->getResultItems();
        $collection = new Collection();

        foreach ($items as $item) {
            $collection->push($this->helper->hydrateObject($item, $this->client));
        }

        return $collection;
    }
}