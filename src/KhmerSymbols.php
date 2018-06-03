<?php

namespace UnicodeCharacterRanges;

class KhmerSymbols extends CharacterRange
{
    const RANGE_NAME = 'Khmer Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '19E0',
            '19FF',
        ],
            'dec' => [
            6624,
            6655,
        ],
        ];
    }
}
