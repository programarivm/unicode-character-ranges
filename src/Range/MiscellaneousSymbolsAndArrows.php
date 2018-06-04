<?php

namespace UnicodeCharacterRanges\Range;

class MiscellaneousSymbolsAndArrows extends RangeAbstract
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
