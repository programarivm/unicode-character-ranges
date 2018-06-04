<?php

namespace UnicodeCharacterRanges\Range;

class CJKCompatibilityForms extends RangeAbstract
{
    const RANGE_NAME = 'CJK Compatibility Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FE30',
            'FE4F',
        ];
    }
}
