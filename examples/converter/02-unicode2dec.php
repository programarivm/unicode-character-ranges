<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Converter;

$converter = new Converter();

$dec = $converter->unicode2dec('Ξ');

echo $dec . PHP_EOL;
