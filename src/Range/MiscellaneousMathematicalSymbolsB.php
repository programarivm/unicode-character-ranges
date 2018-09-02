<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class MiscellaneousMathematicalSymbolsB extends RangeAbstract
{
    const RANGE_NAME = 'Miscellaneous Mathematical Symbols-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2980',
            '29FF',
        ];
    }
}
