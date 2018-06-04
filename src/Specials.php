<?php

namespace UnicodeCharacterRanges;

class Specials extends CharacterRange
{
    const RANGE_NAME = 'Specials';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FFF0',
            'FFFF',
        ];
    }
}
