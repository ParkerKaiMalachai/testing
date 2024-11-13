<?php

declare(strict_types=1);

namespace src\classes;

class Product
{
    public function getProfit(int $price, int $quantity): int
    {
        return $price * $quantity;
    }

    public function getDecrease(int $price, int $spoiledQuantity): int
    {
        return $price * $spoiledQuantity;
    }
}