<?php

namespace UnicodeCharacterRanges\Range;

class Buginese extends RangeAbstract
{
    const RANGE_NAME = 'Buginese';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1A00',
            '1A1F',
        ];
    }
}
