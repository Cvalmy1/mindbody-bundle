<?php


namespace Despark\MindbodyBundle\Service\Soap\Services\StaffService\GetStaff;


use Despark\MindbodyBundle\Model\Staff;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseParserInterface;
use Illuminate\Support\Collection;

class GetStaffResponseParser implements ResponseParserInterface
{

    public function parse(ResponseInterface $response): Collection
    {

        $items = $response->getResultItems();
        $collection = new Collection();

        foreach ($items as $item) {
            $staff = new Staff();

            $staff->setId($item->ID);
            $staff->setName($item->Name);
            $staff->setFirstName($item->FirstName);
            $staff->setLastName($item->LastName);
            $staff->setMobilePhone($item->MobilePhone ?? null);
            $staff->setAddress($item->Address ?? null);
            $staff->setCity($item->City ?? null);
            $staff->setPostalCode($item->PostalCode ?? null);
            $staff->setSortOrder($item->SortOrder ?? null);
            $staff->setAppointmentTrn($item->AppointmentTrn ?? null);
            $staff->setReservationTrn($item->ReservationTrn ?? null);
            $staff->setIndependentContractor($item->IndependentContractor ?? null);
            $staff->setAlwaysAllowDoubleBooking($item->AlwaysAllowDoubleBooking ?? null);
            $staff->setIsMale($item->isMale ?? null);


            $collection->push($staff);
        }

        return $collection;
    }
}