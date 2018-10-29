<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetClassDescriptions;

use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultResponseTrait;

/**
 * Class GetClassDescriptionsResponse
 */
class GetClassDescriptionsResponse implements ResponseInterface
{
    use DefaultResponseTrait;

    /**
     * @return string
     */
    function resultRootKey(): string
    {
        return 'ClassDescriptions';
    }

    /**
     * @return string
     */
    function resultItemKey(): string
    {
        return 'ClassDescription';
    }
}