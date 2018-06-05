<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Range\AlchemicalSymbols;

$alchemicalSymbols = new AlchemicalSymbols;

echo "Total: {$alchemicalSymbols->count()}".PHP_EOL;
echo "Range: {$alchemicalSymbols->range()[0]}-{$alchemicalSymbols->range()[1]}".PHP_EOL;
echo 'Characters: ' . PHP_EOL;
print_r($alchemicalSymbols->chars());
