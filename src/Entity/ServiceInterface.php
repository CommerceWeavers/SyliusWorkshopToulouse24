<?php

namespace Acme\SyliusAwesomePlugin\Entity;

interface ServiceInterface
{
    public function getId(): ?int;

    public function getName(): ?string;

    public function setName(?string $name): void;

    public function getCost(): ?int;

    public function setCost(?int $cost): void;
}
