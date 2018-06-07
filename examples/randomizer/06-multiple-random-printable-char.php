<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$char = Randomizer::printableChar([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $char . PHP_EOL;
