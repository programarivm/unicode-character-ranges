<?php

namespace UnicodeRanges\Range;

class Myanmar extends RangeAbstract
{
    const RANGE_NAME = 'Myanmar';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1000',
            '109F',
        ];
    }
}
