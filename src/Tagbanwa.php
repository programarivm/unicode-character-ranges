<?php

namespace UnicodeCharacterRanges;

class Tagbanwa extends CharacterRange
{
    const RANGE_NAME = 'Tagbanwa';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1760',
            '177F',
        ],
            'dec' => [
            5984,
            6015,
        ],
        ];
    }
}
