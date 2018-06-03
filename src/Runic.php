<?php

namespace UnicodeCharacterRanges;

class Runic extends CharacterRange
{
    const RANGE_NAME = 'Runic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '16A0',
            '16FF',
        ],
            'dec' => [
            5792,
            5887,
        ],
        ];
    }
}
