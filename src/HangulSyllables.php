<?php

namespace UnicodeCharacterRanges;

class HangulSyllables extends CharacterRange
{
    const RANGE_NAME = 'Hangul Syllables';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AC00',
            'D7AF',
        ];
    }
}
