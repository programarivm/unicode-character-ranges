<?php

namespace UnicodeCharacterRanges;

class Vai extends CharacterRange
{
    const RANGE_NAME = 'Vai';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A500',
            'A63F',
        ];
    }
}
