<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\Balinese;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;
use UnicodeRanges\Range\Runic;

$randomizer = new Randomizer();

$char = $randomizer->char([
    new Arabic,
    new Balinese,
    new HangulJamo,
    new Phoenician,
    new Runic
]);

echo $char . PHP_EOL;
