<?php

namespace UnicodeCharacterRanges;

class Thaana extends CharacterRange
{
    const RANGE_NAME = 'Thaana';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0780',
            '07BF',
        ],
            'dec' => [
            1920,
            1983,
        ],
        ];
    }
}
