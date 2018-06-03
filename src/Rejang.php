<?php

namespace UnicodeCharacterRanges;

class Rejang extends CharacterRange
{
    const RANGE_NAME = 'Rejang';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A930',
            'A95F',
        ];
    }
}
