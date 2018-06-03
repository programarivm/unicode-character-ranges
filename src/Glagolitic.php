<?php

namespace UnicodeCharacterRanges;

class Glagolitic extends CharacterRange
{
    const RANGE_NAME = 'Glagolitic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2C00',
            '2C5F',
        ];
    }
}
