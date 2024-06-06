<?php

use Acme\SyliusAwesomePlugin\Entity\Service;
use Sylius\Bundle\GridBundle\Builder\Action\CreateAction;
use Sylius\Bundle\GridBundle\Builder\Action\DeleteAction;
use Sylius\Bundle\GridBundle\Builder\Action\UpdateAction;
use Sylius\Bundle\GridBundle\Builder\ActionGroup\ItemActionGroup;
use Sylius\Bundle\GridBundle\Builder\ActionGroup\MainActionGroup;
use Sylius\Bundle\GridBundle\Builder\Field\Field;
use Sylius\Bundle\GridBundle\Builder\Field\StringField;
use Sylius\Bundle\GridBundle\Builder\Filter\MoneyFilter;
use Sylius\Bundle\GridBundle\Builder\Filter\StringFilter;
use Sylius\Bundle\GridBundle\Builder\GridBuilder;
use Sylius\Bundle\GridBundle\Config\GridConfig;

return static function (GridConfig $grid): void {
    $grid->addGrid(GridBuilder::create('acme_awesome_admin_service', '%acme_awesome.model.service.class%')
        ->addOrderBy('cost', 'asc')
        ->addField(StringField::create('id'))
        ->addField(StringField::create('name'))
        ->addField(
            StringField::create('cost')
                ->setLabel('app.ui.cost')
                ->setSortable(true)
        )
        ->addActionGroup(MainActionGroup::create(CreateAction::create()))
        ->addActionGroup(ItemActionGroup::create(UpdateAction::create(), DeleteAction::create()))
        ->addFilter(
            MoneyFilter::create('cost', 'EUR')
        )
    );
};
