<?php

namespace UnicodeCharacterRanges;

class GreekAndCoptic extends CharacterRange
{
    const RANGE_NAME = 'Greek and Coptic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0370',
            '03FF',
        ],
            'dec' => [
            880,
            1023,
        ],
        ];
    }
}
