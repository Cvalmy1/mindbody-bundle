<?php

namespace Despark\MindbodyBundle\DependencyInjection\Compiler;

use Despark\MindbodyBundle\Service\SoapService;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class DiscoverSoapServicesCompilerPass
 * @package Despark\MindbodyBundle\DependencyInjection\Compiler
 */
class DiscoverSoapServicesCompilerPass implements CompilerPassInterface
{

    /**
     * You can modify the container here before it is dumped to PHP code.
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {


        $taggedServices = $container->findTaggedServiceIds('mindbody.service');

        $soapClientService = $container->getDefinition(SoapService::class);

        foreach ($taggedServices as $serviceId => $tags) {
            $container->getDefinition($serviceId)
                      ->addMethodCall('setSoapService', [$soapClientService]);
        }
    }
}