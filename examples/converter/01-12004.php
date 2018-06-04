<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Converter;
use UnicodeRanges\Exception\CharacterLengthException;

$dec = 12004;
$unicode = Converter::dec2unicode($dec);

echo "$dec is $unicode" . PHP_EOL;
