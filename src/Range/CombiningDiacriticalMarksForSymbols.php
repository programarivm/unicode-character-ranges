<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CombiningDiacriticalMarksForSymbols extends AbstractRange
{
    const RANGE_NAME = 'Combining Diacritical Marks for Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '20D0',
            '20FF',
        ];
    }
}
