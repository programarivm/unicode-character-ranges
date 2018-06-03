<?php

namespace UnicodeCharacterRanges;

class Cherokee extends CharacterRange
{
    const RANGE_NAME = 'Cherokee';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '13A0',
            '13FF',
        ],
            'dec' => [
            5024,
            5119,
        ],
        ];
    }
}
