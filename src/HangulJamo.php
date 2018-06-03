<?php

namespace UnicodeCharacterRanges;

class HangulJamo extends CharacterRange
{
    const RANGE_NAME = 'Hangul Jamo';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1100',
            '11FF',
        ],
            'dec' => [
            4352,
            4607,
        ],
        ];
    }
}
