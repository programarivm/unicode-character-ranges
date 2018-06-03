<?php

namespace UnicodeCharacterRanges;

class Ethiopic extends CharacterRange
{
    const RANGE_NAME = 'Ethiopic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1200',
            '137F',
        ],
            'dec' => [
            4608,
            4991,
        ],
        ];
    }
}
