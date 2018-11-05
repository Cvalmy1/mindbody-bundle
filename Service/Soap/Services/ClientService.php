<?php

namespace Despark\MindbodyBundle\Service\Soap\Services;

use Despark\MindbodyBundle\Service\Soap\Interfaces\MindbodyServiceInterface;
use Despark\MindbodyBundle\Service\Soap\Services\ClientService\GetClients;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultSoapServiceTrait;

/**
 * Class ClientService
 */
class ClientService implements MindbodyServiceInterface
{
    use DefaultSoapServiceTrait;

    const SERVICE_NAME = 'ClassService';

    /**
     * @var \Despark\MindbodyBundle\Service\Soap\Services\ClientService\GetClients
     */
    private $getClients;

    /**
     * ClientService constructor.
     * @param \Despark\MindbodyBundle\Service\Soap\Services\ClientService\GetClients $getClients
     */
    public function __construct(GetClients $getClients)
    {
        $this->getClients = $getClients;
    }

    /**
     * @return \Despark\MindbodyBundle\Service\Soap\Services\ClientService\GetClients
     */
    public function getGetClientsMethod(): GetClients
    {
        return $this->getClients;
    }
}