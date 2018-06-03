<?php

namespace UnicodeCharacterRanges;

class PhoneticExtensionsSupplement extends CharacterRange
{
    const RANGE_NAME = 'Phonetic Extensions Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1D80',
            '1DBF',
        ],
            'dec' => [
            7552,
            7615,
        ],
        ];
    }
}
