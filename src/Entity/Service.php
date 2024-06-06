<?php

declare(strict_types=1);

namespace Acme\SyliusAwesomePlugin\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Sylius\Component\Resource\Model\ResourceInterface;

#[Entity]
#[Table(name: 'acme_sylius_awesome_service')]
class Service implements ResourceInterface
{
    #[Id]
    #[GeneratedValue(strategy: 'AUTO')]
    #[Column(type: 'integer')]
    private $id;

    public function getId()
    {
        return $this->id;
    }
}
