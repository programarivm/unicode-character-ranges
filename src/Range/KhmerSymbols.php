<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class KhmerSymbols extends RangeAbstract
{
    const RANGE_NAME = 'Khmer Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '19E0',
            '19FF',
        ];
    }
}
