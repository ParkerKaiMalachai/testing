<?php

declare(strict_types=1);

namespace src\classes;

class TotalSum {
    public function __construct(private float $sum) {}
 
    public function get(): float
    {
        return $this->sum;
    }
 
    public function set(float $value): self
    {
        $this->sum = $value;
 
        return $this;
    }
 }
 