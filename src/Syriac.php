<?php

namespace UnicodeCharacterRanges;

class Syriac extends CharacterRange
{
    const RANGE_NAME = 'Syriac';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0700',
            '074F',
        ];
    }
}
