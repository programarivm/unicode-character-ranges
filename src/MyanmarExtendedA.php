<?php

namespace UnicodeCharacterRanges;

class MyanmarExtendedA extends CharacterRange
{
    const RANGE_NAME = 'Myanmar Extended-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AA60',
            'AA7F',
        ];
    }
}
