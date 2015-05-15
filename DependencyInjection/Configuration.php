<?php

namespace AT\AdminBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration extends \Sonata\AdminBundle\DependencyInjection\Configuration
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = parent::getConfigTreeBuilder();

        $rootNode = $treeBuilder->root("at_admin", 'array');
        $rootNode
            ->children()
                ->scalarNode('entity_manager')->defaultNull()->end()
                ->arrayNode('audit')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('force')->defaultTrue()->end()
                    ->end()
                ->end()
                ->arrayNode('templates')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode('form')
                            ->prototype('scalar')->end()
                            ->defaultValue(array('ATAdminBundle:Form:fa_choice.html.twig'))
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
