<?php

namespace Despark\MindbodyBundle\Service\Soap\Response;

use Despark\MindbodyBundle\Exceptions\ResponseException;
use Despark\MindbodyBundle\Model\StaffInterface;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;

/**
 * Class ResponseHelper
 */
class ResponseHelper
{
    /**
     * @var \Despark\MindbodyBundle\Model\StaffInterface
     */
    private $staff;

    /**
     * ResponseHelper constructor.
     * @param \Despark\MindbodyBundle\Model\StaffInterface $staff
     */
    public function __construct(StaffInterface $staff)
    {
        $this->staff = $staff;
    }

    /**
     * @param $source
     * @param $target
     * @return mixed
     * @throws \Despark\MindbodyBundle\Exceptions\ResponseException
     */
    public function hydrateObject($source, $target)
    {
        if (!is_object($source) || !is_object($target)) {
            throw new ResponseException('Bad type');
        }

        $sourceReflection = new \ReflectionObject($source);
        $sourceProperties = $sourceReflection->getProperties();

        $targetClone = clone $target;
        $targetReflection = new \ReflectionObject($targetClone);
        $targetMethods = $targetReflection->getMethods(\ReflectionMethod::IS_PUBLIC);

        /** @var \ReflectionMethod[] $targetSetters */
        $targetSetters = [];

        foreach ($targetMethods as $method) {
            if (strpos($method->getName(), 'set') === 0) {
                $targetSetters[$method->getName()] = $method;
            }
        }

        foreach ($sourceProperties as $property) {
            $property->setAccessible(true);
            $propertyName = $property->getName();

            $setterName = 'set'.ucfirst($propertyName);
            if (array_key_exists($setterName, $targetSetters)) {
                $setter = $targetSetters[$setterName];
                $parameter = $setter->getParameters()[0];
                $parameterType = $parameter->getType();

                if ($parameterType && !$parameterType->isBuiltin()) {
                    $newSource = $property->getValue($source);
                    $className = $parameterType->getName();

                    if (is_a($className, \DateTimeInterface::class, true)) {
                        $value = $this->getDateTimeValue($source, $setter, $property);
                    } elseif (is_a($className, StaffInterface::class, true)) {
                        $newTarget = clone $this->staff;
                        $value = $this->hydrateObject($newSource, $newTarget);
                    } else {
                        $newTarget = new $className;
                        $value = $this->hydrateObject($newSource, $newTarget);
                    }
                } else {
                    $value = $property->getValue($source);
                }

                $setter->invoke($targetClone, $value);
            }
        }

        return $targetClone;
    }

    /**
     * @param $source
     * @param \ReflectionMethod $setter
     * @param \ReflectionProperty $property
     * @return \DateTimeInterface|null
     */
    private function getDateTimeValue(
        $source,
        \ReflectionMethod $setter,
        \ReflectionProperty $property
    ): ?\DateTimeInterface {
        $parameters = $setter->getParameters();

        if (!isset($parameters[1])) {
            throw new ParameterNotFoundException('format');
        }

        $format = $parameters[1]->getDefaultValue();
        $date = \DateTime::createFromFormat($format, $property->getValue($source));

        if (!$date) {
            return null;
        }

        return $date;
    }
}