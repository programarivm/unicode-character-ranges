<?php

namespace UnicodeCharacterRanges;

class Bengali extends CharacterRange
{
    const RANGE_NAME = 'Bengali';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0980',
            '09FF',
        ],
            'dec' => [
            2432,
            2559,
        ],
        ];
    }
}
