<?php

namespace UnicodeCharacterRanges;

class PhagsPa extends CharacterRange
{
    const RANGE_NAME = 'Phags-pa';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A840',
            'A87F',
        ];
    }
}
