<?php

namespace Despark\MindbodyBundle\Service\Soap;

use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Illuminate\Support\Collection;

/**
 * Class ResponseParser
 * @package Despark\MindbodyBundle\Service\Soap
 */
class ResponseParser implements ResponseParserInterface
{

    /**
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface $response
     * @return \Illuminate\Support\Collection
     */
    public function parse(ResponseInterface $response): Collection
    {
        return new Collection($response);
    }
}