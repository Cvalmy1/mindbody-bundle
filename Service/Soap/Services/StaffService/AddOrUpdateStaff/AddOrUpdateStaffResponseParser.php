<?php


namespace Despark\MindbodyBundle\Service\Soap\Services\StaffService\AddOrUpdateStaff;


use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Illuminate\Support\Collection;

class AddOrUpdateStaffResponseParser implements ResponseParserInterface
{
    public function parse(ResponseInterface $response): Collection
    {
        return new Collection();
    }
}