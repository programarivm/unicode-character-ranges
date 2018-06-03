<?php

namespace UnicodeCharacterRanges;

class Malayalam extends CharacterRange
{
    const RANGE_NAME = 'Malayalam';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0D00',
            '0D7F',
        ],
            'dec' => [
            3328,
            3455,
        ],
        ];
    }
}
