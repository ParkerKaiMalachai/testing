<?php

declare(strict_types=1);

require 'app/autoload.php';

use PHPUnit\Framework\TestCase;
use src\classes\DefaultProfitCalculator;
use src\classes\TotalSum;

class DefaultProfitCalculatorUnitTest extends TestCase
{
    /*
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testGetProfit(): void
    {
        $mock = Mockery::mock(TotalSum::class);
        $mock->shouldReceive('get')->andReturn(100);
        $defaultCalculator = new DefaultProfitCalculator($mock);

        $this->assertEquals(new TotalSum(80), $defaultCalculator->getProfit($mock));
    }
}