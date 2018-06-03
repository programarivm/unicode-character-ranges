<?php

namespace UnicodeCharacterRanges;

class LatinExtendedC extends CharacterRange
{
    const RANGE_NAME = 'Latin Extended-C';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2C60',
            '2C7F',
        ],
            'dec' => [
            11360,
            11391,
        ],
        ];
    }
}
