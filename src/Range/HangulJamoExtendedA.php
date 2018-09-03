<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class HangulJamoExtendedA extends AbstractRange
{
    const RANGE_NAME = 'Hangul Jamo Extended-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A960',
            'A97F',
        ];
    }
}
