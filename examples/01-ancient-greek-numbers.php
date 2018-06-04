<?php

require __DIR__.'/../vendor/autoload.php';

// echo iconv('UCS-2', 'UTF-8', '10140'); exit;

$unicode = hexdec('10140');

echo code2utf($unicode);

exit;

use UnicodeCharacterRanges\AncientGreekNumbers;

$ancientGreekNumbers = new AncientGreekNumbers;

print_r($ancientGreekNumbers->getRange());
