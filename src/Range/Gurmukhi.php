<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Gurmukhi extends RangeAbstract
{
    const RANGE_NAME = 'Gurmukhi';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0A00',
            '0A7F',
        ];
    }
}
