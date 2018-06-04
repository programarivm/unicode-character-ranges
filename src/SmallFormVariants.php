<?php

namespace UnicodeCharacterRanges;

class SmallFormVariants extends CharacterRange
{
    const RANGE_NAME = 'Small Form Variants';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FE50',
            'FE6F',
        ];
    }
}
