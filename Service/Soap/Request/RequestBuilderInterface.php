<?php

namespace Despark\MindbodyBundle\Service\Soap\Request;

use Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface;

interface RequestBuilderInterface
{
    /**
     * @param $object
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface $request
     *
     * @param callable|null $mapping
     *
     * @return \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface
     * @throws \Despark\MindbodyBundle\Exceptions\RequestBuilderException
     * @throws \ReflectionException
     */
    public function build($object, RequestInterface $request, ?callable $mapping = null): RequestInterface;
}