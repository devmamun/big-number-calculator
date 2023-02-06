<?php

namespace Devmamun\BigNumberCalculator\Calculate;

class Addition {
    private $summation = '';

    public function calculate($arg)
    {
        foreach ($arg as $number) {
            $number = $this->makeEqual(strval($number));

            $carry = 0;
            $sum = '';
            for ($i = strlen($number) - 1; $i >= 0; $i--) {
                $add = strval($number[$i] + $this->summation[$i] + $carry);

                if ($add >= 10) {
                    $carry = $add[0];
                    $sum = $add[1] . $sum;
                    continue;
                }

                $sum = $add . $sum;
                $carry = 0;
            }

            $this->summation = $carry > 0 ? $carry . $sum : $sum;
        }

        return $this->summation;
    }

    private function makeEqual($num)
    {
        $this->summation = str_pad($this->summation, strlen($num), "0", STR_PAD_LEFT);
        
        return str_pad($num, strlen($this->summation), "0", STR_PAD_LEFT);
    }
}