<?php

declare(strict_types=1);

namespace src\interfaces;

use src\classes\TotalSum;

interface ShouldCalculateProfit
{
    public function getProfit(TotalSum $sum): TotalSum;
}