<?php

namespace UnicodeCharacterRanges\Range;

class HangulJamo extends RangeAbstract
{
    const RANGE_NAME = 'Hangul Jamo';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1100',
            '11FF',
        ];
    }
}
