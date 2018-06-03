<?php

namespace UnicodeCharacterRanges;

class PhoneticExtensions extends CharacterRange
{
    const RANGE_NAME = 'Phonetic Extensions';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1D00',
            '1D7F',
        ],
            'dec' => [
            7424,
            7551,
        ],
        ];
    }
}
