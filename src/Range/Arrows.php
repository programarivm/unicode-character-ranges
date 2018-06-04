<?php

namespace UnicodeCharacterRanges\Range;

class Arrows extends RangeAbstract
{
    const RANGE_NAME = 'Arrows';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2190',
            '21FF',
        ];
    }
}
