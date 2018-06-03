<?php

namespace UnicodeCharacterRanges;

class Syriac extends CharacterRange
{
    const RANGE_NAME = 'Syriac';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0700',
            '074F',
        ],
            'dec' => [
            1792,
            1871,
        ],
        ];
    }
}
