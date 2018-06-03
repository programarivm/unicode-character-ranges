<?php

namespace UnicodeCharacterRanges;

class Bopomofo extends CharacterRange
{
    const RANGE_NAME = 'Bopomofo';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3100',
            '312F',
        ];
    }
}
