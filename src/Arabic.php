<?php

namespace UnicodeCharacterRanges;

class Arabic extends CharacterRange
{
    const RANGE_NAME = 'Arabic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0600',
            '06FF',
        ],
            'dec' => [
            1536,
            1791,
        ],
        ];
    }
}
