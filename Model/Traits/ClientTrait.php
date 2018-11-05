<?php

namespace Despark\MindbodyBundle\Model\Traits;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait ClientTrait
 * @package Despark\MindbodyBundle\Model\Traits
 */
trait ClientTrait
{
    /**
     * @var string|null
     */
    protected $ID;

    /**
     * @var int|null
     */
    protected $UniqueID;

    /**
     * @var string|null
     */
    protected $Email;

    /**
     * @var bool|null
     */
    protected $EmailOptIn;

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
     * @var string|null
     * @Assert\Choice({'Male', 'Female', 'None'})
     */
    protected $Gender;

    /**
     * @var string|null
     * @Assert\Choice({'Male', 'Female', 'None'})
     */
    protected $AppointmentGenderPreference;

    /**
     * @var bool|null
     */
    protected $IsCompany;

    /**
     * @var bool|null
     */
    protected $LiabilityRelease;

    /**
     * @var \DateTimeInterface|null
     */
    protected $BirthDate;

    /**
     * @var \DateTimeInterface|null
     */
    protected $FirstAppointmentDate;

    /**
     * @var string|null
     */
    protected $ReferredBy;

    /**
     * @var bool|null
     */
    protected $IsProspect;

    /**
     * @var string|null
     */
    protected $Status;

    /**
     * @var string|null
     */
    protected $AddressLine1;

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
    protected $State;

    /**
     * @var string|null
     */
    protected $PostalCode;

    /**
     * @var string|null
     */
    protected $MobilePhone;

    /**
     * @var string|null
     */
    protected $HomePhone;

    /**
     * @var \DateTimeInterface|null
     */
    protected $CreationDate;

    /**
     * @return null|string
     */
    public function getID(): ?string
    {
        return $this->ID;
    }

    /**
     * @param null|string $ID
     */
    public function setID(?string $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return int|null
     */
    public function getUniqueID(): ?int
    {
        return $this->UniqueID;
    }

    /**
     * @param int|null $UniqueID
     */
    public function setUniqueID(?int $UniqueID): void
    {
        $this->UniqueID = $UniqueID;
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

    /**
     * @return bool|null
     */
    public function getEmailOptIn(): ?bool
    {
        return $this->EmailOptIn;
    }

    /**
     * @param bool|null $EmailOptIn
     */
    public function setEmailOptIn(?bool $EmailOptIn): void
    {
        $this->EmailOptIn = $EmailOptIn;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * @param null|string $Name
     */
    public function setName(?string $Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return null|string
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    /**
     * @param null|string $FirstName
     */
    public function setFirstName(?string $FirstName): void
    {
        $this->FirstName = $FirstName;
    }

    /**
     * @return null|string
     */
    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    /**
     * @param null|string $LastName
     */
    public function setLastName(?string $LastName): void
    {
        $this->LastName = $LastName;
    }

    /**
     * @return null|string
     */
    public function getGender(): ?string
    {
        return $this->Gender;
    }

    /**
     * @param null|string $Gender
     */
    public function setGender(?string $Gender): void
    {
        $this->Gender = $Gender;
    }

    /**
     * @return null|string
     */
    public function getAppointmentGenderPreference(): ?string
    {
        return $this->AppointmentGenderPreference;
    }

    /**
     * @param null|string $AppointmentGenderPreference
     */
    public function setAppointmentGenderPreference(?string $AppointmentGenderPreference): void
    {
        $this->AppointmentGenderPreference = $AppointmentGenderPreference;
    }

    /**
     * @return bool|null
     */
    public function getisCompany(): ?bool
    {
        return $this->IsCompany;
    }

    /**
     * @param bool|null $IsCompany
     */
    public function setIsCompany(?bool $IsCompany): void
    {
        $this->IsCompany = $IsCompany;
    }

    /**
     * @return bool|null
     */
    public function getLiabilityRelease(): ?bool
    {
        return $this->LiabilityRelease;
    }

    /**
     * @param bool|null $LiabilityRelease
     */
    public function setLiabilityRelease(?bool $LiabilityRelease): void
    {
        $this->LiabilityRelease = $LiabilityRelease;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->BirthDate;
    }

    /**
     * @param \DateTimeInterface|null $BirthDate
     */
    public function setBirthDate(?\DateTimeInterface $BirthDate): void
    {
        $this->BirthDate = $BirthDate;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getFirstAppointmentDate(): ?\DateTimeInterface
    {
        return $this->FirstAppointmentDate;
    }

    /**
     * @param \DateTimeInterface|null $FirstAppointmentDate
     */
    public function setFirstAppointmentDate(?\DateTimeInterface $FirstAppointmentDate): void
    {
        $this->FirstAppointmentDate = $FirstAppointmentDate;
    }

    /**
     * @return null|string
     */
    public function getReferredBy(): ?string
    {
        return $this->ReferredBy;
    }

    /**
     * @param null|string $ReferredBy
     */
    public function setReferredBy(?string $ReferredBy): void
    {
        $this->ReferredBy = $ReferredBy;
    }

    /**
     * @return bool|null
     */
    public function getisProspect(): ?bool
    {
        return $this->IsProspect;
    }

    /**
     * @param bool|null $IsProspect
     */
    public function setIsProspect(?bool $IsProspect): void
    {
        $this->IsProspect = $IsProspect;
    }

    /**
     * @return null|string
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * @param null|string $Status
     */
    public function setStatus(?string $Status): void
    {
        $this->Status = $Status;
    }

    /**
     * @return null|string
     */
    public function getAddressLine1(): ?string
    {
        return $this->AddressLine1;
    }

    /**
     * @param null|string $AddressLine1
     */
    public function setAddressLine1(?string $AddressLine1): void
    {
        $this->AddressLine1 = $AddressLine1;
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
    public function getState(): ?string
    {
        return $this->State;
    }

    /**
     * @param null|string $State
     */
    public function setState(?string $State): void
    {
        $this->State = $State;
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
     * @return \DateTimeInterface|null
     */
    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->CreationDate;
    }

    /**
     * @param \DateTimeInterface|null $CreationDate
     */
    public function setCreationDate(?\DateTimeInterface $CreationDate): void
    {
        $this->CreationDate = $CreationDate;
    }
}