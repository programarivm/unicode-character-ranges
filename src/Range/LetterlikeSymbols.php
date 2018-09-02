<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class LetterlikeSymbols extends RangeAbstract
{
    const RANGE_NAME = 'Letterlike Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2100',
            '214F',
        ];
    }
}
