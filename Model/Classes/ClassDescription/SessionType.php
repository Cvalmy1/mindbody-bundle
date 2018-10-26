<?php

namespace Despark\MindbodyBundle\Model\Classes\ClassDescription;

/**
 * Class SessionType
 */
class SessionType
{
    /**
     * @var int
     */
    private $ID;

    /**
     * @var int|null
     */
    private $DefaultTimeLength;

    /**
     * @var int
     */
    private $ProgramID;

    /**
     * @var int
     */
    private $NumDeducted;

    /**
     * @var string
     */
    private $Name;

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     */
    public function setID(int $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return int|null
     */
    public function getDefaultTimeLength(): ?int
    {
        return $this->DefaultTimeLength;
    }

    /**
     * @param int|null $DefaultTimeLength
     */
    public function setDefaultTimeLength(?int $DefaultTimeLength): void
    {
        $this->DefaultTimeLength = $DefaultTimeLength;
    }

    /**
     * @return int
     */
    public function getProgramID(): int
    {
        return $this->ProgramID;
    }

    /**
     * @param int $ProgramID
     */
    public function setProgramID(int $ProgramID): void
    {
        $this->ProgramID = $ProgramID;
    }

    /**
     * @return int
     */
    public function getNumDeducted(): int
    {
        return $this->NumDeducted;
    }

    /**
     * @param int $NumDeducted
     */
    public function setNumDeducted(int $NumDeducted): void
    {
        $this->NumDeducted = $NumDeducted;
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
}