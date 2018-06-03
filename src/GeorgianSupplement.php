<?php

namespace UnicodeCharacterRanges;

class GeorgianSupplement extends CharacterRange
{
    const RANGE_NAME = 'Georgian Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2D00',
            '2D2F',
        ],
            'dec' => [
            11520,
            11567,
        ],
        ];
    }
}
