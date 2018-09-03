<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class HangulJamoExtendedB extends AbstractRange
{
    const RANGE_NAME = 'Hangul Jamo Extended-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'D7B0',
            'D7FF',
        ];
    }
}
