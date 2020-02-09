<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$randomizer = new Randomizer();

$letter = $randomizer->letter([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $letter . PHP_EOL;
