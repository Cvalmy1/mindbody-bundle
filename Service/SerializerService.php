<?php

namespace Despark\MindbodyBundle\Service;

use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class ModelSerializer
 * @package Despark\MindbodyBundle\Service
 */
class SerializerService
{
    const FORMAT_JSON = 'json';

    /**
     * @var \Symfony\Component\Serializer\SerializerInterface
     */
    private $serializer;

    /**
     * ModelSerializer constructor.
     * @param \Symfony\Component\Serializer\SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }


    /**
     * @param $object
     * @param $format
     * @return null
     */
    public function serialize($object, $format)
    {
        if (!is_object($object)) {
            return null;
        }
        
        return $this->serializer->serialize($object, $format);
    }

    /**
     * @param $object
     * @return string
     */
    public function serializeJSON($object)
    {
        return $this->serializer->serialize($object, self::FORMAT_JSON);

    }
}