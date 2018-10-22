<?php


namespace Despark\MindbodyBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('mindbody');

        //@formatter:off
        $rootNode
            ->children()
                ->booleanNode('test_mode')->defaultTrue()->treatNullLike(true)->end()
                ->arrayNode('credentials')
                ->addDefaultsIfNotSet()
                ->children()
                    ->integerNode('site_id')->defaultValue(-99)->treatNullLike(-99)->end()
                    ->scalarNode('api_key')->defaultValue('secret')->treatNullLike('secret')->end()
                ->end()
                ->end()
                ->end()
            ->end();
        //@formatter:on

        return $treeBuilder;

    }
}