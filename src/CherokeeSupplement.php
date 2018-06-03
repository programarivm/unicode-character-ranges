<?php

namespace UnicodeCharacterRanges;

class CherokeeSupplement extends CharacterRange
{
    const RANGE_NAME = 'Cherokee Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AB70',
            'ABBF',
        ];
    }
}
