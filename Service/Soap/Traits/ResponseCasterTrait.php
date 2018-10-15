<?php

namespace Despark\MindbodyBundle\Service\Soap\Traits;

use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use ReflectionObject;

/**
 * Trait ResponseCasterTrait
 * @package Despark\MindbodyBundle\Service\Soap\Traits
 */
trait ResponseCasterTrait
{

    abstract public function getResponseClass(): string;

    /**
     * @param null|\stdClass $sourceObject
     * @return mixed
     */
    private function castResponse(?\stdClass $sourceObject): ?ResponseInterface
    {
        if (is_null($sourceObject)) {
            return null;
        }
        $responseClass = $this->getResponseClass();

        $destination = new $responseClass;

        $sourceReflection = new ReflectionObject($sourceObject);
        $destinationReflection = new ReflectionObject($destination);
        $sourceProperties = $sourceReflection->getProperties();
        foreach ($sourceProperties as $sourceProperty) {
            $sourceProperty->setAccessible(true);
            $name = $sourceProperty->getName();
            $value = $sourceProperty->getValue($sourceObject);
            if ($destinationReflection->hasProperty($name)) {
                $propDest = $destinationReflection->getProperty($name);
                $propDest->setAccessible(true);
                $propDest->setValue($destination, $value);
            } else {
                $destination->$name = $value;
            }
        }

        return $destination;
    }
}