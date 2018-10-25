<?php


namespace Despark\MindbodyBundle\Service\Soap\Response;


use Despark\MindbodyBundle\Exceptions\ResponseException;

class ResponseHelper
{

    /**
     * @param $source
     * @param $target
     *
     * @return object
     * @throws \Despark\MindbodyBundle\Exceptions\ResponseException
     * @throws \ReflectionException
     */
    public function hydrateObject($source, $target)
    {
        if (!is_object($source) || !is_object($target)) {
            throw new ResponseException('Bad type');
        }

        $targetClone = clone $target;

        $sourceReflection = new \ReflectionObject($source);

        $sourceProperties = $sourceReflection->getProperties();

        foreach ($sourceProperties as $property) {
            $property->setAccessible(true);
            $propertyName = $property->getName();

            $setter = 'set'.ucfirst($propertyName);
            if (method_exists($targetClone, $setter)) {
                $targetClone->$setter($property->getValue($source));
            }
        }

        return $targetClone;
    }


}