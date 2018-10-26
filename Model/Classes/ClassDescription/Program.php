<?php

namespace Despark\MindbodyBundle\Model\Classes\ClassDescription;

/**
 * Class Program
 */
class Program
{
    /**
     * @var int
     */
    private $ID;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $ScheduleType;

    /**
     * @var int
     */
    private $CancelOffset;

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
    public function getScheduleType(): string
    {
        return $this->ScheduleType;
    }

    /**
     * @param string $ScheduleType
     */
    public function setScheduleType(string $ScheduleType): void
    {
        $this->ScheduleType = $ScheduleType;
    }

    /**
     * @return int
     */
    public function getCancelOffset(): int
    {
        return $this->CancelOffset;
    }

    /**
     * @param int $CancelOffset
     */
    public function setCancelOffset(int $CancelOffset): void
    {
        $this->CancelOffset = $CancelOffset;
    }
}