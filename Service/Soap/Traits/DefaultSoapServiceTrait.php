<?php

namespace Despark\MindbodyBundle\Service\Soap\Traits;


trait DefaultSoapServiceTrait
{
    /**
     * @var string[]
     */
    private $methods;

    /**
     * @param string $method
     */
    public function addMethod(string $method): void
    {
        $this->methods[$method] = $method;

    }
}