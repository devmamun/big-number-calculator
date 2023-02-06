<?php

use Devmamun\BigNumberCalculator\NumberFactory;

require './vendor/autoload.php';

$calculate = new NumberFactory;
echo $calculate->add('225676666666666', '999999', '45678908767865678945678967898765789');