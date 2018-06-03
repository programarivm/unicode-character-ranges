<?php

namespace UnicodeCharacterRanges;

class Tamil extends CharacterRange
{
    const RANGE_NAME = 'Tamil';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0B80',
            '0BFF',
        ],
            'dec' => [
            2944,
            3071,
        ],
        ];
    }
}
