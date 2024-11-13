<?php

declare(strict_types=1);

require 'app/autoload.php';

use PHPUnit\Framework\TestCase;

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

        $this->assertSame(50, $mock->getProfit(5, 10));
    }

    /*
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testGetDecrease(): void
    {
        $mock = Mockery::mock('Product');
        $mock->shouldReceive('getDecrease')->andReturn((18));

        $this->assertSame(18, $mock->getDecrease(3, 6));
    }
}