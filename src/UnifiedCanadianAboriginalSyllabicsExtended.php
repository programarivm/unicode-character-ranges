<?php

namespace UnicodeCharacterRanges;

class UnifiedCanadianAboriginalSyllabicsExtended extends CharacterRange
{
    const RANGE_NAME = 'Unified Canadian Aboriginal Syllabics Extended';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '18B0',
            '18FF',
        ];
    }
}
