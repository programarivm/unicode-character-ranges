<?php

namespace UnicodeCharacterRanges;

class LowSurrogates extends CharacterRange
{
    const RANGE_NAME = 'Low Surrogates';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'DC00',
            'DFFF',
        ];
    }
}
