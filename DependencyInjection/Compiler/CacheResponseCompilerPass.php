<?php


namespace Despark\MindbodyBundle\DependencyInjection\Compiler;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class CacheResponseCompilerPass implements CompilerPassInterface
{

    /**
     * You can modify the container here before it is dumped to PHP code.
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        $serviceIds = $container->findTaggedServiceIds('mindbody.cache.response');

        foreach ($serviceIds as $serviceId => $tags) {
            $definition = $container->getDefinition($serviceId);
            $definition->addMethodCall('setCache', [new Reference('cache.app')]);
        }
    }
}