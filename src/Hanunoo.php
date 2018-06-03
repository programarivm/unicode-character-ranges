<?php

namespace UnicodeCharacterRanges;

class Hanunoo extends CharacterRange
{
    const RANGE_NAME = 'Hanunoo';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1720',
            '173F',
        ];
    }
}
