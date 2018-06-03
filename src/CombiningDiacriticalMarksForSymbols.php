<?php

namespace UnicodeCharacterRanges;

class CombiningDiacriticalMarksForSymbols extends CharacterRange
{
    const RANGE_NAME = 'Combining Diacritical Marks for Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '20D0',
            '20FF',
        ],
            'dec' => [
            8400,
            8447,
        ],
        ];
    }
}
