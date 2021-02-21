<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Converter;

$converter = new Converter();

$name = $converter->unicode2name('Ξ');

echo $name . PHP_EOL;
