<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Converter;

$converter = new Converter();

$unicode = $converter->dec2unicode(926);

echo $unicode . PHP_EOL;
