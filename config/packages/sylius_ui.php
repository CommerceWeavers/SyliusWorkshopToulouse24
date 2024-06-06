<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator) {
    $containerConfigurator->extension('sylius_ui', [
        'events' => [
            'sylius.admin.layout.javascripts' => [
                'blocks' => [
                    'acme_sylius_awesome_scripts' => [
                        'template' => '@AcmeSyliusAwesomePlugin/Admin/_scripts.html.twig',
                        'priority' => 5,
                    ],
                ],
            ],
            'sylius.admin.layout.stylesheets' => [
                'blocks' => [
                    'acme_sylius_awesome_scripts' => [
                        'template' => '@AcmeSyliusAwesomePlugin/Admin/_styles.html.twig',
                        'priority' => 5,
                    ],
                ],
            ],
            'sylius.shop.layout.javascripts' => [
                'blocks' => [
                    'acme_sylius_awesome_scripts' => [
                        'template' => '@AcmeSyliusAwesomePlugin/Shop/_scripts.html.twig',
                        'priority' => 5,
                    ],
                ],
            ],
            'sylius.shop.layout.stylesheets' => [
                'blocks' => [
                    'acme_sylius_awesome_scripts' => [
                        'template' => '@AcmeSyliusAwesomePlugin/Shop/_styles.html.twig',
                        'priority' => 5,
                    ],
                ],
            ],
            'sylius.admin.product.update.tab_details' => [
                'blocks' => [
                    'acme_sylius_awesome_product_form' => [
                        'template' => '@AcmeSyliusAwesomePlugin/Admin/Product/_form.html.twig',
                        'priority' => 5,
                    ],
                ],
            ]
        ],
    ]);
};
