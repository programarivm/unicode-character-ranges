<?php

namespace UnicodeCharacterRanges;

class EnclosedAlphanumerics extends CharacterRange
{
    const RANGE_NAME = 'Enclosed Alphanumerics';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2460',
            '24FF',
        ];
    }
}
