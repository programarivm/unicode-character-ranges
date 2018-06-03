<?php

namespace UnicodeCharacterRanges;

class Buhid extends CharacterRange
{
    const RANGE_NAME = 'Buhid';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1740',
            '175F',
        ],
            'dec' => [
            5952,
            5983,
        ],
        ];
    }
}
