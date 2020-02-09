<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Range\HangulJamo;

$hangulJamo = new HangulJamo;

echo "Name: {$hangulJamo->name()}".PHP_EOL;
echo "Total: {$hangulJamo->count()}".PHP_EOL;
echo "Range: {$hangulJamo->range()[0]}-{$hangulJamo->range()[1]}".PHP_EOL;
