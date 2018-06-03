<?php

namespace UnicodeCharacterRanges;

class Cyrillic extends CharacterRange
{
    const RANGE_NAME = 'Cyrillic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0400',
            '04FF',
        ];
    }
}
