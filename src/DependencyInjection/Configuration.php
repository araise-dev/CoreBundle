<?php

declare(strict_types=1);

namespace araise\CoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('araise_core');
        $rootNode = $treeBuilder->getRootNode();

        if (!method_exists($rootNode, 'children')) {
            throw new \RuntimeException('Expected configuration rootNode to have method children()');
        }

        $rootNode
            ->children()
                ->booleanNode('enable_turbo')
                ->defaultFalse()
                ->end();

        return $treeBuilder;
    }
}
