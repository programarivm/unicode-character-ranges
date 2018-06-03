<?php

namespace UnicodeCharacterRanges;

class Khmer extends CharacterRange
{
    const RANGE_NAME = 'Khmer';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1780',
            '17FF',
        ];
    }
}
