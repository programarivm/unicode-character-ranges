<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CombiningDiacriticalMarks extends AbstractRange
{
    const RANGE_NAME = 'Combining Diacritical Marks';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0300',
            '036F',
        ];
    }
}
