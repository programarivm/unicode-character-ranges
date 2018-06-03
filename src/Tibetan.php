<?php

namespace UnicodeCharacterRanges;

class Tibetan extends CharacterRange
{
    const RANGE_NAME = 'Tibetan';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0F00',
            '0FFF',
        ],
            'dec' => [
            3840,
            4095,
        ],
        ];
    }
}
