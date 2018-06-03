<?php

namespace UnicodeCharacterRanges;

class CyrillicExtendedB extends CharacterRange
{
    const RANGE_NAME = 'Cyrillic Extended-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A640',
            'A69F',
        ];
    }
}
