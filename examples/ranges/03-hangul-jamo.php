<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Range\HangulJamo;

$hangulJamo = new HangulJamo;

echo "Total: {$hangulJamo->count()}".PHP_EOL;
echo "Range: {$hangulJamo->range()[0]}-{$hangulJamo->range()[1]}".PHP_EOL;
echo 'Characters: ' . PHP_EOL;
print_r($hangulJamo->chars());
