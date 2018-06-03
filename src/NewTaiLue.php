<?php

namespace UnicodeCharacterRanges;

class NewTaiLue extends CharacterRange
{
    const RANGE_NAME = 'New Tai Lue';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1980',
            '19DF',
        ],
            'dec' => [
            6528,
            6623,
        ],
        ];
    }
}
