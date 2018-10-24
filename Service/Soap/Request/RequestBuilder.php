<?php


namespace Despark\MindbodyBundle\Service\Soap\Request;


use Despark\MindbodyBundle\Exceptions\RequestBuilderException;
use Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface;
use Illuminate\Support\Arr;

class RequestBuilder implements RequestBuilderInterface
{

    /**
     * @param $object
     * @param \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface $request
     *
     * @param callable|null $mapping
     *
     * @return \Despark\MindbodyBundle\Service\Soap\Interfaces\RequestInterface
     * @throws \Despark\MindbodyBundle\Exceptions\RequestBuilderException
     * @throws \ReflectionException
     */
    public function build($object, RequestInterface $request, ?callable $mapping = null): RequestInterface
    {
        if (!is_object($object)) {
            throw new RequestBuilderException('Argument must be an object');
        }

        $objectReflection = new \ReflectionClass($object);
        $requestReflection = new \ReflectionClass($request);

        $objectGetters = array_filter($objectReflection->getMethods(\ReflectionMethod::IS_PUBLIC),
            function (\ReflectionMethod $method) {
                return strpos($method->getName(), 'get') === 0;
            }
        );

        $requestSetters = array_filter($requestReflection->getMethods(\ReflectionMethod::IS_PUBLIC),
            function (\ReflectionMethod $method) {
                return strpos($method->getName(), 'set') === 0;
            }
        );

        /** @var \ReflectionMethod[] $objectGetters */
        foreach ($objectGetters as $getter) {
            $propertyName = ucfirst(substr($getter->getName(), 3));
            $setter = null;

            if ($mapping) {
                $setter = call_user_func_array($mapping, [$requestSetters, $getter]);
            }

            if (is_null($setter)) {
                $setter = Arr::first($requestSetters, function (\ReflectionMethod $method) use ($propertyName) {
                    return $propertyName === ucfirst(substr($method->getName(), 3));
                });
            }

            if ($setter && $setter instanceof \ReflectionMethod) {
                $setter->invokeArgs($request, [$getter->invoke($object)]);
            }
        }

        return $request;
    }

}