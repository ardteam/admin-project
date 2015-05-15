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

        $rootNode = $treeBuilder->root("sonata_admin", 'array');
        $rootNode
//            ->fixXmlConfig('option')
//            ->fixXmlConfig('admin_service')
//            ->fixXmlConfig('template')
//            ->fixXmlConfig('extension')
            ->children()
                ->arrayNode('assets')
                ->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode('stylesheets')
                            ->defaultValue(array(
                                'bundles/sonataadmin/vendor/bootstrap/dist/css/bootstrap.min.css',
//                                'bundles/sonataadmin/vendor/AdminLTE/css/font-awesome.min.css',
                                'bundles/atadmin/css/font-awesome.min.css',
                                'bundles/sonataadmin/vendor/AdminLTE/css/ionicons.min.css',
                                'bundles/sonataadmin/vendor/AdminLTE/css/AdminLTE.css',

                                'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',

                                'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css',

                                'bundles/sonataadmin/vendor/select2/select2.css',
                                'bundles/sonataadmin/vendor/select2/select2-bootstrap.css',

                                'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css',

                                'bundles/sonataadmin/css/styles.css',
                                'bundles/sonataadmin/css/layout.css'
                            ))
                            ->prototype('scalar')->end()
                        ->end()
                        ->arrayNode('javascripts')
                            ->defaultValue(array(
                                'bundles/sonataadmin/vendor/jquery/dist/jquery.min.js',
                                'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js',

                                'bundles/sonatacore/vendor/moment/min/moment.min.js',

                                'bundles/sonataadmin/vendor/bootstrap/dist/js/bootstrap.min.js',

                                'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',

                                'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js',
                                'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js',

                                'bundles/sonataadmin/jquery/jquery.form.js',
                                'bundles/sonataadmin/jquery/jquery.confirmExit.js',

                                'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js',

                                'bundles/sonataadmin/vendor/select2/select2.min.js',

                                'bundles/sonataadmin/App.js',
                                'bundles/sonataadmin/Admin.js',
                            ))
                            ->prototype('scalar')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()


//            ->scalarNode('persist_filters')->defaultValue(false)->end()
//
//            ->end()
//        ->end()
        ;

        return $treeBuilder;
    }
}
