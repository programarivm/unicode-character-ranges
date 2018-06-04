<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\BasicLatin;
use UnicodeRanges\Range\Tibetan;
use UnicodeRanges\Range\Cherokee;

$char = Randomizer::char([
    new BasicLatin,
    new Tibetan,
    new Cherokee,
]);

echo "Random Unicode char: $char" . PHP_EOL;
