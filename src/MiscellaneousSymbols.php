<?php

namespace UnicodeCharacterRanges;

class MiscellaneousSymbols extends CharacterRange
{
    const RANGE_NAME = 'Miscellaneous Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2600',
            '26FF',
        ];
    }
}
