<?php

declare(strict_types=1);

namespace App\Entity;

use Acme\SyliusAwesomePlugin\Model\ServiceAwareInterface;
use Acme\SyliusAwesomePlugin\Model\ServiceAwareTrait;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'sylius_product')]
class Product extends \Sylius\Component\Core\Model\Product implements ServiceAwareInterface
{
    use ServiceAwareTrait;
}
