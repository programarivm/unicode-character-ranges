<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$number = Randomizer::number([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $number . PHP_EOL;
