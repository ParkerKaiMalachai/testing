<?php

declare(strict_types=1);

require 'app/autoload.php';

use PHPUnit\Framework\TestCase;
use src\classes\Product;

class unitTest extends TestCase
{
    /*
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testGetProfit(): void
    {
        $mock = Mockery::mock('Product');
        $mock->shouldReceive('getProfit')->andReturn(50);
        $product = new Product($mock);

        $this->assertSame(50, $product->getProfit(5, 10));
    }

    /*
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testGetDecrease(): void
    {
        $mock = Mockery::mock('Product');
        $mock->shouldReceive('getDecrease')->andReturn(18);
        $product = new Product($mock);

        $this->assertSame(18, $product->getDecrease(3, 6));
    }
}