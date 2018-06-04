<?php

namespace UnicodeCharacterRanges\Range;

class CombiningDiacriticalMarks extends RangeAbstract
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
