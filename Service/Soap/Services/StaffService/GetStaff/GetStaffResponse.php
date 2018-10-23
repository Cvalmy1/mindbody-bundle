<?php


namespace Despark\MindbodyBundle\Service\Soap\Services\StaffService\GetStaff;


use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultResponseTrait;

class GetStaffResponse implements ResponseInterface
{
    use DefaultResponseTrait;

    /**
     * @return string
     */
    public function resultRootKey(): string
    {
        return 'StaffMembers';
    }

    public function resultItemKey(): string
    {
        return 'Staff';
    }

}