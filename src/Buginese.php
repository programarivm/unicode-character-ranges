<?php

namespace UnicodeCharacterRanges;

class Buginese extends CharacterRange
{
    const RANGE_NAME = 'Buginese';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1A00',
            '1A1F',
        ],
            'dec' => [
            6656,
            6687,
        ],
        ];
    }
}
