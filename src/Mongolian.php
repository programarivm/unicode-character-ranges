<?php

namespace UnicodeCharacterRanges;

class Mongolian extends CharacterRange
{
    const RANGE_NAME = 'Mongolian';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1800',
            '18AF',
        ],
            'dec' => [
            6144,
            6319,
        ],
        ];
    }
}
