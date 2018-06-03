<?php

namespace UnicodeCharacterRanges;

class HangulJamoExtendedB extends CharacterRange
{
    const RANGE_NAME = 'Hangul Jamo Extended-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'D7B0',
            'D7FF',
        ];
    }
}
