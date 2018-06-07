<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$letters = Randomizer::letters([
    new Arabic,
    new HangulJamo,
    new Phoenician,
], 20);

echo $letters . PHP_EOL;
