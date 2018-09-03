<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class HangulSyllables extends AbstractRange
{
    const RANGE_NAME = 'Hangul Syllables';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AC00',
            'D7AF',
        ];
    }
}
