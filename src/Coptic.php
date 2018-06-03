<?php

namespace UnicodeCharacterRanges;

class Coptic extends CharacterRange
{
    const RANGE_NAME = 'Coptic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2C80',
            '2CFF',
        ];
    }
}
