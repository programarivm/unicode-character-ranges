<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$letter = Randomizer::letter([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $letter . PHP_EOL;
