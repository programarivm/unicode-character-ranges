<?php

namespace UnicodeCharacterRanges;

class Balinese extends CharacterRange
{
    const RANGE_NAME = 'Balinese';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1B00',
            '1B7F',
        ],
            'dec' => [
            6912,
            7039,
        ],
        ];
    }
}
