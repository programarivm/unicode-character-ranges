<?php

namespace UnicodeCharacterRanges;

class BopomofoExtended extends CharacterRange
{
    const RANGE_NAME = 'Bopomofo Extended';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '31A0',
            '31BF',
        ];
    }
}
