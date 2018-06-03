<?php

namespace UnicodeCharacterRanges;

class Saurashtra extends CharacterRange
{
    const RANGE_NAME = 'Saurashtra';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A880',
            'A8DF',
        ];
    }
}
