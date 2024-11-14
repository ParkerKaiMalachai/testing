<?php

declare(strict_types=1);

namespace src\classes;

class Data
{
    public array $data;

    public function __construct()
    {
        $this->data = [
            1 => [
                'name' => 'product',
                'price' => 200,
                'quantity' => 30,
                'spoiledQuantity' => 15
            ]
        ];
    }

    public function getData(): array
    {
        return $this->data;
    }
}