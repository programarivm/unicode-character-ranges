<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Converter;

$converter = new Converter();

$hex = $converter->unicode2hex('Ξ');

echo $hex . PHP_EOL;
