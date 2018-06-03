<?php

namespace UnicodeCharacterRanges;

class Hebrew extends CharacterRange
{
    const RANGE_NAME = 'Hebrew';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0590',
            '05FF',
        ];
    }
}
