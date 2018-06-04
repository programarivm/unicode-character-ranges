<?php

namespace UnicodeCharacterRanges\Range;

class CJKCompatibility extends RangeAbstract
{
    const RANGE_NAME = 'CJK Compatibility';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3300',
            '33FF',
        ];
    }
}
