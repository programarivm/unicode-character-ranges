<?php

namespace UnicodeCharacterRanges\Range;

class EnclosedCJKLettersAndMonths extends RangeAbstract
{
    const RANGE_NAME = 'Enclosed CJK Letters and Months';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3200',
            '32FF',
        ];
    }
}
