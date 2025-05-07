<?php

declare(strict_types=1);

namespace App\Impl;

final class ShoppingCart
{
    /** @var array{product: Product, quantity: int} $items */
    private array $items = [];

    public function addItem(Product $product, int $quantity): ShoppingCart
    {
        $this->items[] = ['product' => $product, 'quantity' => $quantity];
        return $this;
    }

    public function getTotal(): float
    {
        return array_reduce($this->items, function (float $total, array $item): float {
            return $total + $item['product']->getPrice() * $item['quantity'];
        }, 0);
    }

    public function removeItem(Product $product): void
    {
        $this->items = array_filter($this->items, function (array $item) use ($product): bool {
            return $item['product'] !== $product;
        });
    }
}
