<?php

namespace UnicodeCharacterRanges\Range;

class HangulJamoExtendedA extends RangeAbstract
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
