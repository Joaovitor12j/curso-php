<?php

declare(strict_types=1);

use App\Impl\Product;

require_once __DIR__ . '/../vendor/autoload.php';

$camisa = new App\Impl\Product('Camisa', 25.00);
$calca = new Product('Calça', 75.00);

$shoppingCart = new App\Impl\ShoppingCart();
$shoppingCart->addItem($camisa, 2)
    ->addItem($calca, 1);

echo 'Total dos itens - R$ ' . $shoppingCart->getTotal() . PHP_EOL;

$shoppingCart->removeItem($calca);

echo 'Total dos itens - R$ ' . $shoppingCart->getTotal() , PHP_EOL;

$shoppingCart->removeItem($camisa);

echo 'Total dos itens - R$ ' . $shoppingCart->getTotal() , PHP_EOL;
