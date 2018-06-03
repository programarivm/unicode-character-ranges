<?php

namespace UnicodeCharacterRanges;

class MiscellaneousSymbolsAndArrows extends CharacterRange
{
    const RANGE_NAME = 'Miscellaneous Symbols and Arrows';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2B00',
            '2BFF',
        ];
    }
}
