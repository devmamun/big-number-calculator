<?php

namespace Devmamun\BigNumberCalculator;

use Devmamun\BigNumberCalculator\Calculate\Addition;
use PhpParser\Node\Arg;

class NumberFactory
{
    public function add(...$arg)
    {
        $addition = new Addition;
        return $addition->calculate($arg);
    }

    public function sub($num1, $num2)
    {
        return $num1 - $num2;
    }
}