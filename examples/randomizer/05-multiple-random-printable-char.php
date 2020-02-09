<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$randomizer = new Randomizer();

$char = $randomizer->printableChar([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $char . PHP_EOL;
