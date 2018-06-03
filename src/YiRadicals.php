<?php

namespace UnicodeCharacterRanges;

class YiRadicals extends CharacterRange
{
    const RANGE_NAME = 'Yi Radicals';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A490',
            'A4CF',
        ];
    }
}
