<?php

namespace UnicodeCharacterRanges;

class UnifiedCanadianAboriginalSyllabicsExtended extends CharacterRange
{
    const RANGE_NAME = 'Unified Canadian Aboriginal Syllabics Extended';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '18B0',
            '18FF',
        ],
            'dec' => [
            6320,
            6399,
        ],
        ];
    }
}
