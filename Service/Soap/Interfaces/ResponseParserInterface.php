<?php

namespace Despark\MindbodyBundle\Service\Soap\Interfaces;

use Illuminate\Support\Collection;

/**
 * Class ResponseParserInterface
 * @package Despark\MindbodyBundle\Service\Soap
 */
interface ResponseParserInterface
{

    public function parse(ResponseInterface $response): Collection;

}