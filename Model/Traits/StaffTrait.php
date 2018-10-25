<?php


namespace Despark\MindbodyBundle\Model\Traits;


trait StaffTrait
{
    /**
     * @var int|null
     */
    protected $ID;

    /**
     * @var string|null
     */
    protected $Email;

    /**
     * @var string|null
     */
    protected $Name;

    /**
     * @var string|null
     */
    protected $FirstName;

    /**
     * @var string|null
     */
    protected $LastName;

    /**
     * @var
     */
    protected $Address;

    /**
     * @var string|null
     * @Assert\Country()
     */
    protected $Country;
    /**
     * @var string|null
     */
    protected $City;

    /**
     * @var string|null
     */
    protected $MobilePhone;

    /**
     * @var string|null
     */
    protected $HomePhone;

    /**
     * @var string|null
     */
    protected $PostalCode;

    /**
     * @var int|null
     */
    protected $SortOrder;

    /**
     * @var bool
     */
    protected $AppointmentTrn;

    /**
     * @var bool
     */
    protected $ReservationTrn;

    /**
     * @var bool
     */
    protected $IndependentContractor;

    /**
     * @var bool
     */
    protected $AlwaysAllowDoubleBooking;

    /**
     * @var bool
     */
    protected $isMale;


    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     */
    public function setId(int $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     */
    public function setName(string $Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     */
    public function setFirstName(string $FirstName): void
    {
        $this->FirstName = $FirstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     */
    public function setLastName(string $LastName): void
    {
        $this->LastName = $LastName;
    }

    /**
     * @return null|string
     */
    public function getCountry(): ?string
    {
        return $this->Country;
    }

    /**
     * @param null|string $Country
     */
    public function setCountry(?string $Country): void
    {
        $this->Country = $Country;
    }

    /**
     * @return null|string
     */
    public function getCity(): ?string
    {
        return $this->City;
    }

    /**
     * @param null|string $City
     */
    public function setCity(?string $City): void
    {
        $this->City = $City;
    }

    /**
     * @return null|string
     */
    public function getMobilePhone(): ?string
    {
        return $this->MobilePhone;
    }

    /**
     * @param null|string $MobilePhone
     */
    public function setMobilePhone(?string $MobilePhone): void
    {
        $this->MobilePhone = $MobilePhone;
    }

    /**
     * @return null|string
     */
    public function getHomePhone(): ?string
    {
        return $this->HomePhone;
    }

    /**
     * @param null|string $HomePhone
     */
    public function setHomePhone(?string $HomePhone): void
    {
        $this->HomePhone = $HomePhone;
    }

    /**
     * @return null|string
     */
    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }

    /**
     * @param null|string $PostalCode
     */
    public function setPostalCode(?string $PostalCode): void
    {
        $this->PostalCode = $PostalCode;
    }

    /**
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->SortOrder;
    }

    /**
     * @param int|null $SortOrder
     */
    public function setSortOrder(?int $SortOrder): void
    {
        $this->SortOrder = $SortOrder;
    }

    /**
     * @return bool
     */
    public function isAppointmentTrn(): bool
    {
        return $this->AppointmentTrn;
    }

    /**
     * @param bool $AppointmentTrn
     */
    public function setAppointmentTrn(bool $AppointmentTrn): void
    {
        $this->AppointmentTrn = $AppointmentTrn;
    }

    /**
     * @return bool
     */
    public function isReservationTrn(): bool
    {
        return $this->ReservationTrn;
    }

    /**
     * @param bool $ReservationTrn
     */
    public function setReservationTrn(bool $ReservationTrn): void
    {
        $this->ReservationTrn = $ReservationTrn;
    }

    /**
     * @return bool
     */
    public function isIndependentContractor(): bool
    {
        return $this->IndependentContractor;
    }

    /**
     * @param bool $IndependentContractor
     */
    public function setIndependentContractor(bool $IndependentContractor): void
    {
        $this->IndependentContractor = $IndependentContractor;
    }

    /**
     * @return bool
     */
    public function isAlwaysAllowDoubleBooking(): bool
    {
        return $this->AlwaysAllowDoubleBooking;
    }

    /**
     * @param bool $AlwaysAllowDoubleBooking
     */
    public function setAlwaysAllowDoubleBooking(bool $AlwaysAllowDoubleBooking): void
    {
        $this->AlwaysAllowDoubleBooking = $AlwaysAllowDoubleBooking;
    }

    /**
     * @return bool
     */
    public function isMale(): bool
    {
        return $this->isMale;
    }

    /**
     * @param bool $isMale
     */
    public function setIsMale(bool $isMale): void
    {
        $this->isMale = $isMale;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address): void
    {
        $this->Address = $Address;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * @param null|string $Email
     */
    public function setEmail(?string $Email): void
    {
        $this->Email = $Email;
    }

}