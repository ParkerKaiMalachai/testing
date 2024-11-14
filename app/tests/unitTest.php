<?php

declare(strict_types=1);

require 'app/autoload.php';

use PHPUnit\Framework\TestCase;
use src\classes\Product;
use src\classes\Data;

class unitTest extends TestCase
{
    /*
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testGetProfit(): void
    {
        $mock = Mockery::mock(Data::class);
        $mock->shouldReceive('getData')->andReturn([
            1 => [
                'name' => 'product',
                'price' => 200,
                'quantity' => 30,
                'spoiledQuantity' => 15
            ]
        ]);
        $product = new Product($mock);

        $this->assertSame(200 * 30, $product->getProfit(1));
    }
}