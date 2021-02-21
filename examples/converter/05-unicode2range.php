<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Converter;

$converter = new Converter();

$range = $converter->unicode2range('Ξ');

echo "Name: {$range->name()}".PHP_EOL;
echo "Total: {$range->count()}".PHP_EOL;
echo "Range: {$range->range()[0]}-{$range->range()[1]}".PHP_EOL;
