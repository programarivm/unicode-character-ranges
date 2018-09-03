<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class MiscellaneousMathematicalSymbolsA extends AbstractRange
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
