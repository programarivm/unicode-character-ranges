<?php

namespace UnicodeCharacterRanges;

class KatakanaPhoneticExtensions extends CharacterRange
{
    const RANGE_NAME = 'Katakana Phonetic Extensions';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '31F0',
            '31FF',
        ];
    }
}
