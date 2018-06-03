<?php

namespace UnicodeCharacterRanges;

class Tamil extends CharacterRange
{
    const RANGE_NAME = 'Tamil';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0B80',
            '0BFF',
        ];
    }
}
