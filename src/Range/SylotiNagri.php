<?php

namespace UnicodeRanges\Range;

class SylotiNagri extends RangeAbstract
{
    const RANGE_NAME = 'Syloti Nagri';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A800',
            'A82F',
        ];
    }
}
