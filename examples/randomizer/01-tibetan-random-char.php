<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Tibetan;

$randomizer = new Randomizer();

$char = $randomizer->char([
    new Tibetan,
]);

echo $char . PHP_EOL;
