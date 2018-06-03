<?php

namespace UnicodeCharacterRanges;

class VedicExtensions extends CharacterRange
{
    const RANGE_NAME = 'Vedic Extensions';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1CD0',
            '1CFF',
        ],
            'dec' => [
            7376,
            7423,
        ],
        ];
    }
}
