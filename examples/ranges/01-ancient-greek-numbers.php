<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Range\AncientGreekNumbers;

$ancientGreekNumbers = new AncientGreekNumbers;

echo "Name: {$ancientGreekNumbers->name()}".PHP_EOL;
echo "Total: {$ancientGreekNumbers->count()}".PHP_EOL;
echo "Range: {$ancientGreekNumbers->range()[0]}-{$ancientGreekNumbers->range()[1]}".PHP_EOL;
