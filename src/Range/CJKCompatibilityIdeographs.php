<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CJKCompatibilityIdeographs extends AbstractRange
{
    const RANGE_NAME = 'CJK Compatibility Ideographs';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'F900',
            'FAFF',
        ];
    }
}
