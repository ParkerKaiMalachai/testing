<?php

declare(strict_types=1);

namespace src\classes;

use src\interfaces\ShouldCalculateProfit;
use src\classes\TotalSum;

final class DefaultProfitCalculator implements ShouldCalculateProfit
{
    public function getProfit(TotalSum $sum): TotalSum
    {
        $profit = $sum->get() * 0.8;

        return new TotalSum($profit);
    }
}