<?php

namespace UnicodeCharacterRanges;

class LetterlikeSymbols extends CharacterRange
{
    const RANGE_NAME = 'Letterlike Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2100',
            '214F',
        ];
    }
}
