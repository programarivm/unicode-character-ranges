<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class SupplementalArrowsB extends AbstractRange
{
    const RANGE_NAME = 'Supplemental Arrows-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2900',
            '297F',
        ];
    }
}
