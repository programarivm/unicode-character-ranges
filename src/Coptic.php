<?php

namespace UnicodeCharacterRanges;

class Coptic extends CharacterRange
{
    const RANGE_NAME = 'Coptic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2C80',
            '2CFF',
        ],
            'dec' => [
            11392,
            11519,
        ],
        ];
    }
}
