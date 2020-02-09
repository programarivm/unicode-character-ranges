<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$randomizer = new Randomizer();

$number = $randomizer->number([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $number . PHP_EOL;
