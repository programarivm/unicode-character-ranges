<?php

namespace UnicodeCharacterRanges\Range;

class CJKStrokes extends RangeAbstract
{
    const RANGE_NAME = 'CJK Strokes';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '31C0',
            '31EF',
        ];
    }
}
