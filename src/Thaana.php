<?php

namespace UnicodeCharacterRanges;

class Thaana extends CharacterRange
{
    const RANGE_NAME = 'Thaana';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0780',
            '07BF',
        ];
    }
}
