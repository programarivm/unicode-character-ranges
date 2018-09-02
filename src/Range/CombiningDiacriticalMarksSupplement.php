<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class CombiningDiacriticalMarksSupplement extends RangeAbstract
{
    const RANGE_NAME = 'Combining Diacritical Marks Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1DC0',
            '1DFF',
        ];
    }
}
