<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Ranges;
use UnicodeRanges\Converter;

$ranges = (new Ranges)->all();
$converter = new Converter();

$names = [];
foreach ($ranges as $range) {
    $table = $converter->range2table([$range->range()[0], $range->range()[1]]);
    foreach ($table as $key => $val) {
        $names[$converter->unicode2name($val)] = $val;
    }
}

print_r(
    json_encode($names, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);
