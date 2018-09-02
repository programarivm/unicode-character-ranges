<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class CombiningHalfMarks extends RangeAbstract
{
    const RANGE_NAME = 'Combining Half Marks';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FE20',
            'FE2F',
        ];
    }
}
