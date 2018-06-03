<?php

namespace UnicodeCharacterRanges;

class Georgian extends CharacterRange
{
    const RANGE_NAME = 'Georgian';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '10A0',
            '10FF',
        ],
            'dec' => [
            4256,
            4351,
        ],
        ];
    }
}
