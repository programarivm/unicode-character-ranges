<?php

namespace UnicodeCharacterRanges;

class UnifiedCanadianAboriginalSyllabics extends CharacterRange
{
    const RANGE_NAME = 'Unified Canadian Aboriginal Syllabics';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1400',
            '167F',
        ];
    }
}
