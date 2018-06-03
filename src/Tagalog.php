<?php

namespace UnicodeCharacterRanges;

class Tagalog extends CharacterRange
{
    const RANGE_NAME = 'Tagalog';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1700',
            '171F',
        ],
            'dec' => [
            5888,
            5919,
        ],
        ];
    }
}
