<?php

declare(strict_types=1);

namespace Acme\SyliusAwesomePlugin\Model;

use Acme\SyliusAwesomePlugin\Entity\Service;

interface ServiceAwareInterface
{
    public function getService(): ?Service;
    public function setService(?Service $service): void;
}
