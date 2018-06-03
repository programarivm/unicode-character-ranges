<?php

namespace UnicodeCharacterRanges;

class HangulJamoExtendedA extends CharacterRange
{
    const RANGE_NAME = 'Hangul Jamo Extended-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A960',
            'A97F',
        ];
    }
}
