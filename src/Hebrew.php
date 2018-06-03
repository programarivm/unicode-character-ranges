<?php

namespace UnicodeCharacterRanges;

class Hebrew extends CharacterRange
{
    const RANGE_NAME = 'Hebrew';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0590',
            '05FF',
        ],
            'dec' => [
            1424,
            1535,
        ],
        ];
    }
}
