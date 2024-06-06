<?php

declare(strict_types=1);

namespace Acme\SyliusAwesomePlugin\Model;

use Acme\SyliusAwesomePlugin\Entity\Service;
use Doctrine\ORM\Mapping\ManyToOne;

trait ServiceAwareTrait
{
    #[ManyToOne(targetEntity: Service::class)]
    private ?Service $service = null;

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): void
    {
        $this->service = $service;
    }
}
