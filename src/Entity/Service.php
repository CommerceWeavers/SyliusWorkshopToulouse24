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
#[Table(name: 'acme_sylius_awesome_plugin_service')]
class Service implements ResourceInterface, ServiceInterface
{
    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue(strategy: 'AUTO')]
    private ?int $id;

    #[Column(type: 'string', nullable: true)]
    private ?string $name = null;

    #[Column(type: 'integer', nullable: true)]
    private ?int $cost = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(?int $cost): void
    {
        $this->cost = $cost;
    }
}
