<?php

namespace UnicodeCharacterRanges;

class Limbu extends CharacterRange
{
    const RANGE_NAME = 'Limbu';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1900',
            '194F',
        ];
    }
}
