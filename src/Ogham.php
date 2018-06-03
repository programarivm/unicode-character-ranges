<?php

namespace UnicodeCharacterRanges;

class Ogham extends CharacterRange
{
    const RANGE_NAME = 'Ogham';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1680',
            '169F',
        ],
            'dec' => [
            5760,
            5791,
        ],
        ];
    }
}
