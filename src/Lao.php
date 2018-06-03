<?php

namespace UnicodeCharacterRanges;

class Lao extends CharacterRange
{
    const RANGE_NAME = 'Lao';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0E80',
            '0EFF',
        ],
            'dec' => [
            3712,
            3839,
        ],
        ];
    }
}
