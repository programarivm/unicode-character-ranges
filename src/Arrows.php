<?php

namespace UnicodeCharacterRanges;

class Arrows extends CharacterRange
{
    const RANGE_NAME = 'Arrows';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2190',
            '21FF',
        ];
    }
}
