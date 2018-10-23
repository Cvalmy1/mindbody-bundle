<?php


namespace Despark\MindbodyBundle\Model;


use Symfony\Component\Validator\Constraints as Assert;

class Staff
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var
     */
    private $address;

    /**
     * @var string|null
     * @Assert\Country()
     */
    private $country;
    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $mobilePhone;

    /**
     * @var string|null
     */
    private $homePhone;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var int|null
     */
    private $sortOrder;

    /**
     * @var bool
     */
    private $appointmentTrn;

    /**
     * @var bool
     */
    private $reservationTrn;

    /**
     * @var bool
     */
    private $independentContractor;

    /**
     * @var bool
     */
    private $alwaysAllowDoubleBooking;

    /**
     * @var bool
     */
    private $isMale;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return null|string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param null|string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return null|string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param null|string $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return null|string
     */
    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    /**
     * @param null|string $mobilePhone
     */
    public function setMobilePhone(?string $mobilePhone): void
    {
        $this->mobilePhone = $mobilePhone;
    }

    /**
     * @return null|string
     */
    public function getHomePhone(): ?string
    {
        return $this->homePhone;
    }

    /**
     * @param null|string $homePhone
     */
    public function setHomePhone(?string $homePhone): void
    {
        $this->homePhone = $homePhone;
    }

    /**
     * @return null|string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param null|string $postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    /**
     * @param int|null $sortOrder
     */
    public function setSortOrder(?int $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    /**
     * @return bool
     */
    public function isAppointmentTrn(): bool
    {
        return $this->appointmentTrn;
    }

    /**
     * @param bool $appointmentTrn
     */
    public function setAppointmentTrn(bool $appointmentTrn): void
    {
        $this->appointmentTrn = $appointmentTrn;
    }

    /**
     * @return bool
     */
    public function isReservationTrn(): bool
    {
        return $this->reservationTrn;
    }

    /**
     * @param bool $reservationTrn
     */
    public function setReservationTrn(bool $reservationTrn): void
    {
        $this->reservationTrn = $reservationTrn;
    }

    /**
     * @return bool
     */
    public function isIndependentContractor(): bool
    {
        return $this->independentContractor;
    }

    /**
     * @param bool $independentContractor
     */
    public function setIndependentContractor(bool $independentContractor): void
    {
        $this->independentContractor = $independentContractor;
    }

    /**
     * @return bool
     */
    public function isAlwaysAllowDoubleBooking(): bool
    {
        return $this->alwaysAllowDoubleBooking;
    }

    /**
     * @param bool $alwaysAllowDoubleBooking
     */
    public function setAlwaysAllowDoubleBooking(bool $alwaysAllowDoubleBooking): void
    {
        $this->alwaysAllowDoubleBooking = $alwaysAllowDoubleBooking;
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
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }
}