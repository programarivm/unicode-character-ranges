<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class EnclosedCJKLettersAndMonths extends AbstractRange
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
