<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService\Parsers;

use Despark\MindbodyBundle\Model\Classes\ClassDescription;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper;
use Illuminate\Support\Collection;

/**
 * Class GetClassDescriptionsResponseParser
 */
class GetClassDescriptionsResponseParser implements ResponseParserInterface
{
    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper
     */
    private $helper;

    /**
     * @var \Despark\MindbodyBundle\Model\Classes\ClassDescription
     */
    private $class;

    /**
     * GetClassDescriptionsResponseParser constructor.
     * @param \Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper $helper
     * @param \Despark\MindbodyBundle\Model\Classes\ClassDescription $class
     */
    public function __construct(ResponseHelper $helper, ClassDescription $class)
    {
        $this->helper = $helper;
        $this->class = $class;
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
            $collection->push($this->helper->hydrateObject($item, $this->class));
        }

        return $collection;
    }
}