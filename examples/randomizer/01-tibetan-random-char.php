<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Tibetan;

$char = Randomizer::char([
    new Tibetan,
]);

echo $char . PHP_EOL;
