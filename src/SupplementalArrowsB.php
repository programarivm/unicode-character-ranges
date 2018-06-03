<?php

namespace UnicodeCharacterRanges;

class SupplementalArrowsB extends CharacterRange
{
    const RANGE_NAME = 'Supplemental Arrows-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2900',
            '297F',
        ],
            'dec' => [
            10496,
            10623,
        ],
        ];
    }
}
