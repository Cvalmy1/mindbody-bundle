<?php


namespace Despark\MindbodyBundle\DependencyInjection;


use Despark\MindbodyBundle\Service\Soap\SoapAuthentication;
use Despark\MindbodyBundle\Service\SoapService;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class MindbodyExtension.
 */
class MindbodyExtension extends Extension
{

    /**
     * Loads a specific configuration.
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $this->createSoapAuth($container, $config);
    }

    /**
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     * @param $config
     */
    private function createSoapAuth(ContainerBuilder $container, $config): void
    {
        ['site_id' => $siteId, 'api_key' => $apiKey] = $config['credentials'];

        $soapAuthDefinition = $container->getDefinition(SoapAuthentication::class);
        $soapAuthDefinition->setArguments([$siteId, $apiKey]);

        $soapServiceDefinition = $container->getDefinition(SoapService::class);
        $soapServiceDefinition->setArguments([$soapAuthDefinition, $config['test_mode']]);
    }
}