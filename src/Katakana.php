<?php

namespace UnicodeCharacterRanges;

class Katakana extends CharacterRange
{
    const RANGE_NAME = 'Katakana';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '30A0',
            '30FF',
        ];
    }
}
