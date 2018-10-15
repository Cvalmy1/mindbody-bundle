<?php


namespace Despark\MindbodyBundle\Service\Soap;


use Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultRequestTrait;

class SimpleRequest implements RequestInterface
{
    use DefaultRequestTrait;
}