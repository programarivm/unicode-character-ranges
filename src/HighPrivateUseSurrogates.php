<?php

namespace UnicodeCharacterRanges;

class HighPrivateUseSurrogates extends CharacterRange
{
    const RANGE_NAME = 'High Private Use Surrogates';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'DB80',
            'DBFF',
        ];
    }
}
