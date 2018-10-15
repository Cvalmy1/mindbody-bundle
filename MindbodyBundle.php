<?php

namespace Despark\MindbodyBundle;

use Despark\MindbodyBundle\DependencyInjection\Compiler\CacheResponseCompilerPass;
use Despark\MindbodyBundle\DependencyInjection\MindbodyExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MindbodyBundle.
 */
class MindbodyBundle extends Bundle
{

    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new CacheResponseCompilerPass());
    }

    /**
     * @return string
     */
    protected function getContainerExtensionClass()
    {
        return MindbodyExtension::class;
    }
}