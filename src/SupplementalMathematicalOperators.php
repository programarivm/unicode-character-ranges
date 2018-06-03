<?php

namespace UnicodeCharacterRanges;

class SupplementalMathematicalOperators extends CharacterRange
{
    const RANGE_NAME = 'Supplemental Mathematical Operators';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2A00',
            '2AFF',
        ];
    }
}
