<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class MiscellaneousMathematicalSymbolsB extends AbstractRange
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
