<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\ClassService\GetClassDescriptions;

use Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultRequestTrait;

/**
 * Class GetClassDescriptionsRequest
 */
class GetClassDescriptionsRequest implements RequestInterface
{
    use DefaultRequestTrait;

    /**
     * @var null|int
     */
    private $ClassDescriptionIDs;

    /**
     * @var null|int[]
     */
    private $ProgramIDs;

    /**
     * @var null|int
     */
    private $StaffIDs;

    /**
     * @var null|int
     */
    private $LocationIDs;

    /**
     * @var null|\DateTimeInterface
     */
    private $StartClassDateTime;

    /**
     * @var null|\DateTimeInterface
     */
    private $EndClassDateTime;

    /**
     * @return int|null
     */
    public function getClassDescriptionIDs(): ?int
    {
        return $this->ClassDescriptionIDs;
    }

    /**
     * @param int|null $ClassDescriptionIDs
     */
    public function setClassDescriptionIDs(?int $ClassDescriptionIDs): void
    {
        $this->ClassDescriptionIDs = $ClassDescriptionIDs;
    }

    /**
     * @return int[]|null
     */
    public function getProgramIDs(): ?array
    {
        return $this->ProgramIDs;
    }

    /**
     * @param int[]|null $ProgramIDs
     */
    public function setProgramIDs(?array $ProgramIDs): void
    {
        $this->ProgramIDs = $ProgramIDs;
    }

    /**
     * @param int $ProgramId
     */
    public function addProgramId(int $ProgramId): void
    {
        $this->ProgramIDs[] = $ProgramId;
    }

    /**
     * @return int|null
     */
    public function getStaffIDs(): ?int
    {
        return $this->StaffIDs;
    }

    /**
     * @param int|null $StaffIDs
     */
    public function setStaffIDs(?int $StaffIDs): void
    {
        $this->StaffIDs = $StaffIDs;
    }

    /**
     * @return int|null
     */
    public function getLocationIDs(): ?int
    {
        return $this->LocationIDs;
    }

    /**
     * @param int|null $LocationIDs
     */
    public function setLocationIDs(?int $LocationIDs): void
    {
        $this->LocationIDs = $LocationIDs;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getStartClassDateTime(): ?\DateTimeInterface
    {
        return $this->StartClassDateTime;
    }

    /**
     * @param \DateTimeInterface|null $StartClassDateTime
     */
    public function setStartClassDateTime(?\DateTimeInterface $StartClassDateTime): void
    {
        $this->StartClassDateTime = $StartClassDateTime;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getEndClassDateTime(): ?\DateTimeInterface
    {
        return $this->EndClassDateTime;
    }

    /**
     * @param \DateTimeInterface|null $EndClassDateTime
     */
    public function setEndClassDateTime(?\DateTimeInterface $EndClassDateTime): void
    {
        $this->EndClassDateTime = $EndClassDateTime;
    }
}