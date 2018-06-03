<?php

namespace UnicodeCharacterRanges;

class MyanmarExtendedB extends CharacterRange
{
    const RANGE_NAME = 'Myanmar Extended-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A9E0',
            'A9FF',
        ];
    }
}
