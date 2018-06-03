<?php

namespace UnicodeCharacterRanges;

class MiscellaneousTechnical extends CharacterRange
{
    const RANGE_NAME = 'Miscellaneous Technical';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2300',
            '23FF',
        ];
    }
}
