<?php

namespace UnicodeCharacterRanges;

class Thai extends CharacterRange
{
    const RANGE_NAME = 'Thai';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0E00',
            '0E7F',
        ],
            'dec' => [
            3584,
            3711,
        ],
        ];
    }
}
