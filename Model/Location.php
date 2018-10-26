<?php

namespace Despark\MindbodyBundle\Model;

/**
 * Class Location
 * @package Despark\MindbodyBundle\Model
 */
class Location
{

    /**
     * @var int
     */
    protected $ID;

    /**
     * @var int
     */
    protected $SiteID;

    /**
     * @var string
     */
    protected $Name;

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
     * @return int
     */
    public function getSiteID(): int
    {
        return $this->SiteID;
    }

    /**
     * @param int $SiteID
     */
    public function setSiteID(int $SiteID): void
    {
        $this->SiteID = $SiteID;
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