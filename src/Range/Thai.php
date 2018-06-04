<?php

namespace UnicodeCharacterRanges\Range;

class Thai extends RangeAbstract
{
    const RANGE_NAME = 'Thai';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0E00',
            '0E7F',
        ];
    }
}
