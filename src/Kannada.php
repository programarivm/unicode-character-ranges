<?php

namespace UnicodeCharacterRanges;

class Kannada extends CharacterRange
{
    const RANGE_NAME = 'Kannada';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0C80',
            '0CFF',
        ],
            'dec' => [
            3200,
            3327,
        ],
        ];
    }
}
