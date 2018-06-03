<?php

namespace UnicodeCharacterRanges;

class CyrillicSupplement extends CharacterRange
{
    const RANGE_NAME = 'Cyrillic Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0500',
            '052F',
        ],
            'dec' => [
            1280,
            1327,
        ],
        ];
    }
}
