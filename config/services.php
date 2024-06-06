<?php

use Acme\SyliusAwesomePlugin\OrderProcessor\ServiceFeeOrderProcessor;
use Sylius\Component\Core\OrderProcessing\OrderAdjustmentsClearer;
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

    $services
        ->set(
            'acme_awesome.order_processing.order_adjustments_clearer',
            OrderAdjustmentsClearer::class
        )->arg(
            '$adjustmentsToRemove', [ServiceFeeOrderProcessor::SERVICE_FEE]
        )->tag(
            'sylius.order_processor', ['priority' => 100]
        )
    ;
};
