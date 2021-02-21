<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Converter;

$converter = new Converter();

$table = $converter->range2table(['2580', '259F']);

print_r($table);
