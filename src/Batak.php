<?php

namespace UnicodeCharacterRanges;

class Batak extends CharacterRange
{
    const RANGE_NAME = 'Batak';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1BC0',
            '1BFF',
        ],
            'dec' => [
            7104,
            7167,
        ],
        ];
    }
}
