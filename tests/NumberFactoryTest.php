<?php

namespace Devmamun\BigNumberCalculator\Tests;

use Devmamun\BigNumberCalculator\NumberFactory;
use PHPUnit\Framework\TestCase;

class NumberFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_summation()
    {
        $number = new NumberFactory();
        $sum = $number->addition(4, 6);

        $this->assertEquals(10, $sum);
    }

    /** @test */
    public function it_returns_subtraction()
    {
        $number = new NumberFactory();
        $sum = $number->subtraction(10, 6);

        $this->assertEquals(4, $sum);
    }
}