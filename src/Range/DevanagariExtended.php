<?php

namespace UnicodeRanges\Range;

class DevanagariExtended extends RangeAbstract
{
    const RANGE_NAME = 'Devanagari Extended';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A8E0',
            'A8FF',
        ];
    }
}
