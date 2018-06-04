<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Range\AlchemicalSymbols;

$alchemicalSymbols = new AlchemicalSymbols;

echo "Total: {$alchemicalSymbols->count()}".PHP_EOL;
echo "Range: {$alchemicalSymbols->range()[0]}-{$alchemicalSymbols->range()[0]}".PHP_EOL;
echo 'Characters: ' .  implode(' ', $alchemicalSymbols->chars()) . PHP_EOL;
