<?php

namespace UnicodeCharacterRanges;

class Telugu extends CharacterRange
{
    const RANGE_NAME = 'Telugu';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0C00',
            '0C7F',
        ];
    }
}
