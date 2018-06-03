<?php

namespace UnicodeCharacterRanges;

class Lepcha extends CharacterRange
{
    const RANGE_NAME = 'Lepcha';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1C00',
            '1C4F',
        ],
            'dec' => [
            7168,
            7247,
        ],
        ];
    }
}
