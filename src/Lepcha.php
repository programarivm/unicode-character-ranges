<?php

namespace UnicodeCharacterRanges;

class Lepcha extends CharacterRange
{
    const RANGE_NAME = 'Lepcha';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1C00',
            '1C4F',
        ];
    }
}
