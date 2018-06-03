<?php

namespace UnicodeCharacterRanges;

class Mandaic extends CharacterRange
{
    const RANGE_NAME = 'Mandaic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0840',
            '085F',
        ];
    }
}
