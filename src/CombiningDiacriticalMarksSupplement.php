<?php

namespace UnicodeCharacterRanges;

class CombiningDiacriticalMarksSupplement extends CharacterRange
{
    const RANGE_NAME = 'Combining Diacritical Marks Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1DC0',
            '1DFF',
        ],
            'dec' => [
            7616,
            7679,
        ],
        ];
    }
}
