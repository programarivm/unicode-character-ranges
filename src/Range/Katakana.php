<?php

namespace UnicodeCharacterRanges\Range;

class Katakana extends RangeAbstract
{
    const RANGE_NAME = 'Katakana';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '30A0',
            '30FF',
        ];
    }
}
