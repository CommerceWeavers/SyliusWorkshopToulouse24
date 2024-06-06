<?php

declare(strict_types=1);

namespace Acme\SyliusAwesomePlugin\Form\Extenstion;

use Acme\SyliusAwesomePlugin\Entity\Service;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('service', EntityType::class, [
            'class' => Service::class,
            'label' => 'acme_sylius_awesome_plugin.ui.service',
            'choice_label' => 'name',
            'required' => false,
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        yield ProductType::class;
    }
}
