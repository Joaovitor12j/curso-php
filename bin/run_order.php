<?php

declare(strict_types=1);

use App\Impl\Order;

require_once __DIR__ . '/../vendor/autoload.php';

$camisa = new App\Impl\Product('Camisa', 25.00);
$calca = new App\Impl\Product('Calça', 75.00);

$order = new Order();
$order->addItem($camisa, 2)
    ->addItem($calca, 1);

echo 'Valor total da ordem: R$ ' . $order->getTotal() . PHP_EOL;

echo 'Pedido criado em: ' . $order->getCreatedAt()->format('d/m/Y H:i:s') . PHP_EOL;

foreach ($order->getItems() as $item) {
    echo 'Item: ' . $item->getProduct()->getName() . PHP_EOL;
    echo 'Valor Unitário: ' . $item->getUnitPrice() . PHP_EOL;
    echo 'Quantidade: ' . $item->getQuantity() . PHP_EOL;
    echo 'Valor Total: ' . $item->getTotal() . PHP_EOL;
}

