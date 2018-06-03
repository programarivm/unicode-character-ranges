<?php

namespace UnicodeCharacterRanges;

class SundaneseSupplement extends CharacterRange
{
    const RANGE_NAME = 'Sundanese Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1CC0',
            '1CCF',
        ],
            'dec' => [
            7360,
            7375,
        ],
        ];
    }
}
