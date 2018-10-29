<?php

namespace Despark\MindbodyBundle\Model\Classes;

use Despark\MindbodyBundle\Model\Classes\ClassDescription\Program;
use Despark\MindbodyBundle\Model\Classes\ClassDescription\SessionType;

/**
 * Class ClassDescription
 * @package Despark\MindbodyBundle\Model
 */
class ClassDescription
{
    /**
     * @var int
     */
    protected $ID;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var \Despark\MindbodyBundle\Model\Classes\ClassDescription\Program
     */
    protected $Program;

    /**
     * @var \Despark\MindbodyBundle\Model\Classes\ClassDescription\SessionType
     */
    protected $SessionType;

    /**
     * @var string
     */
    protected $LastUpdated;

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
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     */
    public function setDescription(string $Description): void
    {
        $this->Description = $Description;
    }

    /**
     * @return \Despark\MindbodyBundle\Model\Classes\ClassDescription\Program
     */
    public function getProgram(): Program
    {
        return $this->Program;
    }

    /**
     * @param \Despark\MindbodyBundle\Model\Classes\ClassDescription\Program $Program
     */
    public function setProgram(Program $Program): void
    {
        $this->Program = $Program;
    }

    /**
     * @return \Despark\MindbodyBundle\Model\Classes\ClassDescription\SessionType
     */
    public function getSessionType(): SessionType
    {
        return $this->SessionType;
    }

    /**
     * @param \Despark\MindbodyBundle\Model\Classes\ClassDescription\SessionType $SessionType
     */
    public function setSessionType(SessionType $SessionType): void
    {
        $this->SessionType = $SessionType;
    }

    /**
     * @return string
     */
    public function getLastUpdated(): string
    {
        return $this->LastUpdated;
    }

    /**
     * @param \DateTime $LastUpdated
     */
    public function setLastUpdated(\DateTime $LastUpdated): void
    {
        $this->LastUpdated = $LastUpdated->format(\DATE_ATOM);
    }
}