<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClientService\GetClients;

use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultResponseTrait;

/**
 * Class GetClientsResponse
 */
class GetClientsResponse implements ResponseInterface
{
    use DefaultResponseTrait;

    /**
     * @return string
     */
    function resultRootKey(): string
    {
        return 'Clients';
    }

    /**
     * @return string
     */
    function resultItemKey(): string
    {
        return 'Client';
    }
}