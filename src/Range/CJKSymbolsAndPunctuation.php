<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CJKSymbolsAndPunctuation extends AbstractRange
{
    const RANGE_NAME = 'CJK Symbols and Punctuation';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3000',
            '303F',
        ];
    }
}
