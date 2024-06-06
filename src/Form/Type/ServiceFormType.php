<?php

declare(strict_types=1);

namespace Acme\SyliusAwesomePlugin\Form\Type;

use Sylius\Bundle\MoneyBundle\Form\Type\MoneyType;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class ServiceFormType extends AbstractResourceType
{
    public function __construct(
        #[Autowire(param: 'acme_awesome.model.service.class')]
        string $dataClass,
        array $validationGroups = []
    ) {
        parent::__construct($dataClass, $validationGroups);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'acme_sylius_awesome.form.service.name',
            ])
            ->add('cost', MoneyType::class, [
                'label' => 'acme_sylius_awesome.form.service.cost',
                'currency' => 'USD',
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'acme_sylius_awesome_service';
    }
}
