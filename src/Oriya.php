<?php

namespace UnicodeCharacterRanges;

class Oriya extends CharacterRange
{
    const RANGE_NAME = 'Oriya';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0B00',
            '0B7F',
        ];
    }
}
