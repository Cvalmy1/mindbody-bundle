<?php

namespace Despark\MindbodyBundle\Model;

interface StaffInterface
{
    /**
     * @return int
     */
    public function getId(): ?int;

    /**
     * @param int $Id
     */
    public function setId(int $Id): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $Name
     */
    public function setName(string $Name): void;

    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @param string $FirstName
     */
    public function setFirstName(string $FirstName): void;

    /**
     * @return string
     */
    public function getLastName(): string;

    /**
     * @param string $LastName
     */
    public function setLastName(string $LastName): void;

    /**
     * @return null|string
     */
    public function getCountry(): ?string;

    /**
     * @param null|string $Country
     */
    public function setCountry(?string $Country): void;

    /**
     * @return null|string
     */
    public function getCity(): ?string;

    /**
     * @param null|string $City
     */
    public function setCity(?string $City): void;

    /**
     * @return null|string
     */
    public function getMobilePhone(): ?string;

    /**
     * @param null|string $MobilePhone
     */
    public function setMobilePhone(?string $MobilePhone): void;

    /**
     * @return null|string
     */
    public function getHomePhone(): ?string;

    /**
     * @param null|string $HomePhone
     */
    public function setHomePhone(?string $HomePhone): void;

    /**
     * @return null|string
     */
    public function getPostalCode(): ?string;

    /**
     * @param null|string $PostalCode
     */
    public function setPostalCode(?string $PostalCode): void;

    /**
     * @return int|null
     */
    public function getSortOrder(): ?int;

    /**
     * @param int|null $SortOrder
     */
    public function setSortOrder(?int $SortOrder): void;

    /**
     * @return bool|null
     */
    public function isAppointmentTrn(): ?bool;

    /**
     * @param bool|null $AppointmentTrn
     */
    public function setAppointmentTrn(?bool $AppointmentTrn): void;

    /**
     * @return bool|null
     */
    public function isReservationTrn(): ?bool;

    /**
     * @param bool|null $ReservationTrn
     */
    public function setReservationTrn(?bool $ReservationTrn): void;

    /**
     * @return bool|null
     */
    public function isIndependentContractor(): ?bool;

    /**
     * @param bool|null $IndependentContractor
     */
    public function setIndependentContractor(?bool $IndependentContractor): void;

    /**
     * @return bool|null
     */
    public function isAlwaysAllowDoubleBooking(): ?bool;

    /**
     * @param bool|null $AlwaysAllowDoubleBooking
     */
    public function setAlwaysAllowDoubleBooking(?bool $AlwaysAllowDoubleBooking): void;

    /**
     * @return bool|null
     */
    public function isMale(): ?bool;

    /**
     * @param bool|null $isMale
     */
    public function setIsMale(?bool $isMale): void;

    /**
     * @return mixed
     */
    public function getAddress();

    /**
     * @param mixed $Address
     */
    public function setAddress($Address): void;

    /**
     * @return null|string
     */
    public function getEmail(): ?string;

    /**
     * @param null|string $Email
     */
    public function setEmail(?string $Email): void;
}