<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService\Parsers;

use Despark\MindbodyBundle\Model\MindbodyClassInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper;
use Illuminate\Support\Collection;

/**
 * Class GetClassesResponseParser
 */
class GetClassesResponseParser implements ResponseParserInterface
{
    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper
     */
    private $helper;

    /**
     * @var \Despark\MindbodyBundle\Model\MindbodyClassInterface
     */
    private $class;

    /**
     * GetClassesResponseParser constructor.
     * @param \Despark\MindbodyBundle\Service\Soap\Response\ResponseHelper $helper
     * @param \Despark\MindbodyBundle\Model\MindbodyClassInterface $class
     */
    public function __construct(ResponseHelper $helper, MindbodyClassInterface $class)
    {
        $this->helper = $helper;
        $this->class = $class;
    }

    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface $response
     * @return \Illuminate\Support\Collection
     * @throws \Despark\MindbodyBundle\Exceptions\ResponseException
     * @throws \ReflectionException
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