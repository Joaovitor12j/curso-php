<?php

declare(strict_types=1);

namespace App\Impl;

final class OrderItem
{
    private Product $product;
    private int $quantity;
    private float $unitPrice;

    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->unitPrice = $product->getPrice();
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getTotal(): float
    {
        return $this->unitPrice * $this->quantity;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }
}
