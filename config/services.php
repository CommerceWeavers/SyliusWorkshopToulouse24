<?php

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
};
