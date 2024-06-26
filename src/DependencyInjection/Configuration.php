<?php

declare(strict_types=1);

namespace Acme\SyliusAwesomePlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('acme_sylius_awesome');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
