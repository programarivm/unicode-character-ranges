<?php

namespace UnicodeCharacterRanges;

class Myanmar extends CharacterRange
{
    const RANGE_NAME = 'Myanmar';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1000',
            '109F',
        ];
    }
}
