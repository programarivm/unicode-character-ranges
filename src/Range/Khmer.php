<?php

namespace UnicodeCharacterRanges\Range;

class Khmer extends RangeAbstract
{
    const RANGE_NAME = 'Khmer';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1780',
            '17FF',
        ];
    }
}
