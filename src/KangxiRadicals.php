<?php

namespace UnicodeCharacterRanges;

class KangxiRadicals extends CharacterRange
{
    const RANGE_NAME = 'Kangxi Radicals';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2F00',
            '2FDF',
        ];
    }
}
