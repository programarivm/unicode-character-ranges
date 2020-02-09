<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$randomizer = new Randomizer();

$chars = $randomizer->printableChars([
    new Arabic,
    new HangulJamo,
    new Phoenician,
], 20);

echo $chars . PHP_EOL;
