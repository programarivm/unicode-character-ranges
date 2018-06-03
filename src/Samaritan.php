<?php

namespace UnicodeCharacterRanges;

class Samaritan extends CharacterRange
{
    const RANGE_NAME = 'Samaritan';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0800',
            '083F',
        ],
            'dec' => [
            2048,
            2111,
        ],
        ];
    }
}
