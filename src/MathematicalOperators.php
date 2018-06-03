<?php

namespace UnicodeCharacterRanges;

class MathematicalOperators extends CharacterRange
{
    const RANGE_NAME = 'Mathematical Operators';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2200',
            '22FF',
        ],
            'dec' => [
            8704,
            8959,
        ],
        ];
    }
}
