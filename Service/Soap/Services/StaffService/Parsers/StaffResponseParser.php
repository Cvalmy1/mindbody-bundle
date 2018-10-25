<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\StaffService\Parsers;

use Despark\MindbodyBundle\Model\StaffInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper;
use Illuminate\Support\Collection;

/**
 * Class StaffResponseParser
 */
class StaffResponseParser implements ResponseParserInterface
{

    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper
     */
    private $helper;
    /**
     * @var \Despark\MindbodyBundle\Model\StaffInterface
     */
    private $staff;

    /**
     * StaffResponseParser constructor.
     *
     * @param \Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper $helper
     * @param \Despark\MindbodyBundle\Model\StaffInterface $staff
     */
    public function __construct(ResponseHelper $helper, StaffInterface $staff)
    {
        $this->helper = $helper;
        $this->staff = $staff;
    }

    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface $response
     *
     * @return \Illuminate\Support\Collection
     * @throws \Despark\MindbodyBundle\Exceptions\ResponseException
     */
    public function parse(ResponseInterface $response): Collection
    {

        $items = $response->getResultItems();
        $collection = new Collection();

        foreach ($items as $item) {
            $collection->push(
                $this->helper->hydrateObject($item, $this->staff)
            );
        }

        return $collection;
    }

}