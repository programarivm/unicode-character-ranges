<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class SupplementalArrowsA extends AbstractRange
{
    const RANGE_NAME = 'Supplemental Arrows-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '27F0',
            '27FF',
        ];
    }
}
