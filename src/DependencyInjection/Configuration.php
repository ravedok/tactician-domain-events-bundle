<?php

namespace BornFree\TacticianDomainEventBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('tactician_domain_event');

        $rootNode
            ->children()
                ->booleanNode('collect_from_all_managed_entities')
                    ->defaultFalse()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
