<?php


namespace Despark\MindbodyBundle\Service\Soap;


use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultResponseTrait;

class SimpleResponse implements ResponseInterface
{
    use DefaultResponseTrait;

    public function resultRootKey(): string
    {
        return '';
    }

    public function resultItemKey(): string
    {
        return '';
    }

    /**
     * @return array
     */
    public function getResultItems(): array
    {
        return [$this];
    }
}