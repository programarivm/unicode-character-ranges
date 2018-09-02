<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class MiscellaneousMathematicalSymbolsA extends RangeAbstract
{
    const RANGE_NAME = 'Miscellaneous Mathematical Symbols-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '27C0',
            '27EF',
        ];
    }
}
