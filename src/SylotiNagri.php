<?php

namespace UnicodeCharacterRanges;

class SylotiNagri extends CharacterRange
{
    const RANGE_NAME = 'Syloti Nagri';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A800',
            'A82F',
        ];
    }
}
