<?php


namespace Despark\MindbodyBundle\Service\Soap\Interfaces;


use Psr\Cache\CacheItemPoolInterface;

/**
 * Interface HasCacheInterface
 * @package Despark\MindbodyBundle\Service\Soap\Interfaces
 */
interface CacheResponseInterface
{

    /**
     * @return \Psr\Cache\CacheItemPoolInterface
     */
    public function getCache(): CacheItemPoolInterface;

    /**
     * @param \Psr\Cache\CacheItemPoolInterface $cache
     */
    public function setCache(CacheItemPoolInterface $cache): void;

    /**
     * @return string
     */
    public function getCacheTag(): string;

}