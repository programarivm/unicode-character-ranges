<?php

namespace UnicodeCharacterRanges;

class TaiLe extends CharacterRange
{
    const RANGE_NAME = 'Tai Le';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1950',
            '197F',
        ],
            'dec' => [
            6480,
            6527,
        ],
        ];
    }
}
