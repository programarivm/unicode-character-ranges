<?php

namespace UnicodeCharacterRanges;

class BraillePatterns extends CharacterRange
{
    const RANGE_NAME = 'Braille Patterns';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2800',
            '28FF',
        ];
    }
}
