<?php

namespace Despark\MindbodyBundle\Model;

/**
 * Interface ClientInterface
 * @package Despark\MindbodyBundle\Model
 */
interface ClientInterface
{
    /**
     * @return null|string
     */
    public function getID(): ?string;

    /**
     * @param null|string $ID
     */
    public function setID(?string $ID): void;

    /**
     * @return int|null
     */
    public function getUniqueID(): ?int;

    /**
     * @param int|null $UniqueID
     */
    public function setUniqueID(?int $UniqueID): void;

    /**
     * @return null|string
     */
    public function getEmail(): ?string;

    /**
     * @param null|string $Email
     */
    public function setEmail(?string $Email): void;

    /**
     * @return bool|null
     */
    public function getEmailOptIn(): ?bool;

    /**
     * @param bool|null $EmailOptIn
     */
    public function setEmailOptIn(?bool $EmailOptIn): void;

    /**
     * @return null|string
     */
    public function getName(): ?string;

    /**
     * @param null|string $Name
     */
    public function setName(?string $Name): void;

    /**
     * @return null|string
     */
    public function getFirstName(): ?string;

    /**
     * @param null|string $FirstName
     */
    public function setFirstName(?string $FirstName): void;

    /**
     * @return null|string
     */
    public function getLastName(): ?string;

    /**
     * @param null|string $LastName
     */
    public function setLastName(?string $LastName): void;

    /**
     * @return null|string
     */
    public function getGender(): ?string;

    /**
     * @param null|string $Gender
     */
    public function setGender(?string $Gender): void;

    /**
     * @return null|string
     */
    public function getAppointmentGenderPreference(): ?string;

    /**
     * @param null|string $AppointmentGenderPreference
     */
    public function setAppointmentGenderPreference(?string $AppointmentGenderPreference): void;

    /**
     * @return bool|null
     */
    public function getisCompany(): ?bool;

    /**
     * @param bool|null $IsCompany
     */
    public function setIsCompany(?bool $IsCompany): void;

    /**
     * @return bool|null
     */
    public function getLiabilityRelease(): ?bool;

    /**
     * @param bool|null $LiabilityRelease
     */
    public function setLiabilityRelease(?bool $LiabilityRelease): void;

    /**
     * @return \DateTimeInterface|null
     */
    public function getBirthDate(): ?\DateTimeInterface;

    /**
     * @param \DateTimeInterface|null $BirthDate
     */
    public function setBirthDate(?\DateTimeInterface $BirthDate): void;

    /**
     * @return \DateTimeInterface|null
     */
    public function getFirstAppointmentDate(): ?\DateTimeInterface;

    /**
     * @param \DateTimeInterface|null $FirstAppointmentDate
     */
    public function setFirstAppointmentDate(?\DateTimeInterface $FirstAppointmentDate): void;

    /**
     * @return null|string
     */
    public function getReferredBy(): ?string;

    /**
     * @param null|string $ReferredBy
     */
    public function setReferredBy(?string $ReferredBy): void;

    /**
     * @return bool|null
     */
    public function getisProspect(): ?bool;

    /**
     * @param bool|null $IsProspect
     */
    public function setIsProspect(?bool $IsProspect): void;

    /**
     * @return null|string
     */
    public function getStatus(): ?string;

    /**
     * @param null|string $Status
     */
    public function setStatus(?string $Status): void;

    /**
     * @return null|string
     */
    public function getAddressLine1(): ?string;

    /**
     * @param null|string $AddressLine1
     */
    public function setAddressLine1(?string $AddressLine1): void;

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
    public function getState(): ?string;

    /**
     * @param null|string $State
     */
    public function setState(?string $State): void;

    /**
     * @return null|string
     */
    public function getPostalCode(): ?string;

    /**
     * @param null|string $PostalCode
     */
    public function setPostalCode(?string $PostalCode): void;

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
     * @return \DateTimeInterface|null
     */
    public function getCreationDate(): ?\DateTimeInterface;

    /**
     * @param \DateTimeInterface|null $CreationDate
     */
    public function setCreationDate(?\DateTimeInterface $CreationDate): void;
}