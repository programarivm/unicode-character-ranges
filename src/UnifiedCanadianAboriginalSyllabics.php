<?php

namespace UnicodeCharacterRanges;

class UnifiedCanadianAboriginalSyllabics extends CharacterRange
{
    const RANGE_NAME = 'Unified Canadian Aboriginal Syllabics';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1400',
            '167F',
        ],
            'dec' => [
            5120,
            5759,
        ],
        ];
    }
}
