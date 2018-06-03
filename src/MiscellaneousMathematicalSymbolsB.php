<?php

namespace UnicodeCharacterRanges;

class MiscellaneousMathematicalSymbolsB extends CharacterRange
{
    const RANGE_NAME = 'Miscellaneous Mathematical Symbols-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2980',
            '29FF',
        ],
            'dec' => [
            10624,
            10751,
        ],
        ];
    }
}
