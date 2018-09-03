<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class MiscellaneousSymbolsAndArrows extends AbstractRange
{
    const RANGE_NAME = 'Miscellaneous Symbols and Arrows';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2B00',
            '2BFF',
        ];
    }
}
