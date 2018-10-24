<?php


namespace Despark\MindbodyBundle\Service\Soap\Services\StaffService\AddOrUpdateStaff;


use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultResponseTrait;

class AddOrUpdateStaffResponse implements ResponseInterface
{
    use DefaultResponseTrait;

    /**
     * @return string
     */
    public function resultRootKey(): string
    {
        return 'Staff';
    }

    /**
     * @return string
     */
    public function resultItemKey(): string
    {
        return $this->resultRootKey();
    }
}