<?php

namespace UnicodeCharacterRanges;

class CyrillicSupplement extends CharacterRange
{
    const RANGE_NAME = 'Cyrillic Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0500',
            '052F',
        ];
    }
}
