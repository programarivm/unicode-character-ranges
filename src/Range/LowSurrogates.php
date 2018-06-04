<?php

namespace UnicodeRanges\Range;

class LowSurrogates extends RangeAbstract
{
    const RANGE_NAME = 'Low Surrogates';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'DC00',
            'DFFF',
        ];
    }
}
