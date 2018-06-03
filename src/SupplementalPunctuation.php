<?php

namespace UnicodeCharacterRanges;

class SupplementalPunctuation extends CharacterRange
{
    const RANGE_NAME = 'Supplemental Punctuation';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2E00',
            '2E7F',
        ];
    }
}
