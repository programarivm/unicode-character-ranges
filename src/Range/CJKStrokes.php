<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CJKStrokes extends AbstractRange
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
