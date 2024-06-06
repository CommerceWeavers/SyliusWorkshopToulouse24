<?php

declare(strict_types=1);

namespace Acme\SyliusAwesomePlugin\OrderProcessing;

use Acme\SyliusAwesomePlugin\Model\ServiceAwareInterface;
use Sylius\Bundle\OrderBundle\Attribute\AsOrderProcessor;
use Sylius\Component\Order\Factory\AdjustmentFactory;
use Sylius\Component\Order\Factory\AdjustmentFactoryInterface;
use Sylius\Component\Order\Model\OrderInterface;
use Sylius\Component\Order\Processor\OrderProcessorInterface;

#[AsOrderProcessor(priority: 25)]
final class AddingServiceFeeOrderProcessor implements OrderProcessorInterface
{
    public const SERVICE_FEE = 'service_fee';

    public function __construct(
        private readonly AdjustmentFactoryInterface $adjustmentFactory,
    )
    {
    }

    public function process(OrderInterface $order): void
    {
        foreach ($order->getItems() as $item) {
            $product = $item->getProduct();

            if (!$product instanceof ServiceAwareInterface) {
                continue;
            }

            $service = $product->getService();

            if ($service === null) {
                continue;
            }

            $item->addAdjustment($this->adjustmentFactory->createWithData(
                self::SERVICE_FEE,
                $service->getName(),
                $service->getCost(),
            ));
        }
    }
}
