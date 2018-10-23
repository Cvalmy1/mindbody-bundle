<?php


namespace Despark\MindbodyBundle\Service\Soap\Request;

/**
 * Class StaffCredentialsRequest.
 */
class StaffCredentialsRequest
{
    /**
     * @var string
     */
    private $Username;

    /**
     * @var string
     */
    private $Password;

    /**
     * @var int[]|null
     */
    private $SiteIds;

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     */
    public function setUsername(string $Username): void
    {
        $this->Username = $Username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     */
    public function setPassword(string $Password): void
    {
        $this->Password = $Password;
    }

    /**
     * @return int[]|null
     */
    public function getSiteIds(): ?array
    {
        return $this->SiteIds;
    }

    /**
     * @param int[]|null $SiteIds
     */
    public function setSiteIds(?array $SiteIds): void
    {
        $this->SiteIds = $SiteIds;
    }
}