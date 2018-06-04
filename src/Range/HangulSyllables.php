<?php

namespace UnicodeCharacterRanges\Range;

class HangulSyllables extends RangeAbstract
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
