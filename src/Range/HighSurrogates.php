<?php

namespace UnicodeCharacterRanges\Range;

class HighSurrogates extends RangeAbstract
{
    const RANGE_NAME = 'High Surrogates';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'D800',
            'DB7F',
        ];
    }
}
