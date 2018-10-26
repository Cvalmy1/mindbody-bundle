<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetClasses;

use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultResponseTrait;

/**
 * Class GetClassesResponse
 */
class GetClassesResponse implements ResponseInterface
{
    use DefaultResponseTrait;

    /**
     * @return string
     */
    public function resultRootKey(): string
    {
        return 'Classes';
    }

    /**
     * @return string
     */
    public function resultItemKey(): string
    {
        return 'Class';
    }
}