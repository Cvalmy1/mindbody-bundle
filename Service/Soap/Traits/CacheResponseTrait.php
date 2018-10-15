<?php


namespace Despark\MindbodyBundle\Service\Soap\Traits;


use Psr\Cache\CacheItemPoolInterface;

/**
 * Trait CacheResponseTrait
 * @package Despark\MindbodyBundle\Service\Soap\Traits
 */
trait CacheResponseTrait
{

    /**
     * @var \Psr\Cache\CacheItemPoolInterface
     */
    private $cache;

    /**
     * @param \Psr\Cache\CacheItemPoolInterface $cache
     */
    public function setCache(CacheItemPoolInterface $cache): void
    {
        $this->cache = $cache;
    }

    /**
     * @return \Psr\Cache\CacheItemPoolInterface
     */
    public function getCache(): CacheItemPoolInterface
    {
        return $this->cache;
    }

    /**
     * @return string
     */
    public function getCacheTag(): string
    {
        $class = get_class($this);

        return 'mindbody_'.strtolower(substr($class, strrpos($class, '\\') + 1));
    }

}