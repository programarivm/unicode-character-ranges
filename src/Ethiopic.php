<?php

namespace UnicodeCharacterRanges;

class Ethiopic extends CharacterRange
{
    const RANGE_NAME = 'Ethiopic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1200',
            '137F',
        ];
    }
}
