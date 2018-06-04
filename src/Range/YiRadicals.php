<?php

namespace UnicodeRanges\Range;

class YiRadicals extends RangeAbstract
{
    const RANGE_NAME = 'Yi Radicals';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A490',
            'A4CF',
        ];
    }
}
