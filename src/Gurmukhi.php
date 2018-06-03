<?php

namespace UnicodeCharacterRanges;

class Gurmukhi extends CharacterRange
{
    const RANGE_NAME = 'Gurmukhi';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0A00',
            '0A7F',
        ],
            'dec' => [
            2560,
            2687,
        ],
        ];
    }
}
