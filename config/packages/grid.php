<?php

declare(strict_types=1);

use Sylius\Bundle\GridBundle\Builder\Action\CreateAction;
use Sylius\Bundle\GridBundle\Builder\ActionGroup\MainActionGroup;
use Sylius\Bundle\GridBundle\Builder\Field\StringField;
use Sylius\Bundle\GridBundle\Builder\GridBuilder;
use Sylius\Bundle\GridBundle\Config\GridConfig;

return static function (GridConfig $grid) {
    $grid->addGrid(
        GridBuilder::create('acme_awesome.service', \Acme\SyliusAwesomePlugin\Entity\Service::class)
            ->addField(
                StringField::create('id')
            )
            ->addActionGroup(
                MainActionGroup::create(CreateAction::create())
            )
    );
};
