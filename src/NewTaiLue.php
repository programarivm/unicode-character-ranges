<?php

namespace UnicodeCharacterRanges;

class NewTaiLue extends CharacterRange
{
    const RANGE_NAME = 'New Tai Lue';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1980',
            '19DF',
        ];
    }
}
