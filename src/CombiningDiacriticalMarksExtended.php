<?php

namespace UnicodeCharacterRanges;

class CombiningDiacriticalMarksExtended extends CharacterRange
{
    const RANGE_NAME = 'Combining Diacritical Marks Extended';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1AB0',
            '1AFF',
        ];
    }
}
