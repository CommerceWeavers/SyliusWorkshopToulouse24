<?php

declare(strict_types=1);

namespace App\Entity;

use Acme\SyliusAwesomePlugin\Model\ServiceAwareInterface;
use Acme\SyliusAwesomePlugin\Model\ServiceAwareTrait;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Sylius\Component\Core\Model\Product as BaseProduct;

#[Entity]
#[Table(name: 'sylius_product')]
class Product extends BaseProduct implements ServiceAwareInterface
{
    use ServiceAwareTrait;
}
