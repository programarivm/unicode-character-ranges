<?php

namespace UnicodeCharacterRanges;

class Tagbanwa extends CharacterRange
{
    const RANGE_NAME = 'Tagbanwa';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1760',
            '177F',
        ];
    }
}
