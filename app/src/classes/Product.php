<?php

declare(strict_types=1);

namespace src\classes;

use src\classes\Data;

class Product
{
    public array $data;

    public function __construct(Data $data)
    {
        $this->data = $data->getData();
    }

    public function getProfit(int $id): float
    {
        $price = $this->data[$id]['price'];
        $quantity = $this->data[$id]['quantity'];
        return $price * $quantity;
    }
}