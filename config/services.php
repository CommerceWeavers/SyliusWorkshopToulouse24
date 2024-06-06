<?php

use Acme\SyliusAwesomePlugin\OrderProcessing\AddingServiceFeeOrderProcessor;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function(ContainerConfigurator $container): void {
    $services = $container->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
    ;

    $services->load('Acme\\SyliusAwesomePlugin\\', '../src/*')
        ->exclude('../src/{DependencyInjection,Entity,Migrations,Resources,Tests,Kernel.php}')
    ;

    $container->services()
        ->set('acme_sylius_awesome_plugin.order_processing.order_adjustments_clearer', Sylius\Component\Core\OrderProcessing\OrderAdjustmentsClearer::class)
        ->arg('$adjustmentsToRemove', [AddingServiceFeeOrderProcessor::SERVICE_FEE])
        ->tag('sylius.order_processor', ['priority' => 100])
    ;
};
