<?php

declare(strict_types=1);

namespace Acme\SyliusAwesomePlugin\Form\Extension;

use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('service', EntityType::class, [
            'class' => 'Acme\SyliusAwesomePlugin\Entity\Service',
            'label' => 'acme.form.product.service',
            'required' => false,
            'choice_label' => 'name',
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        yield ProductType::class;
    }
}
