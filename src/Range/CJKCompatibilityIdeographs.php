<?php

namespace UnicodeCharacterRanges\Range;

class CJKCompatibilityIdeographs extends RangeAbstract
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
