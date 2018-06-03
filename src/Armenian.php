<?php

namespace UnicodeCharacterRanges;

class Armenian extends CharacterRange
{
    const RANGE_NAME = 'Armenian';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0530',
            '058F',
        ],
            'dec' => [
            1328,
            1423,
        ],
        ];
    }
}
