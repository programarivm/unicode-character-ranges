<?php

namespace UnicodeCharacterRanges\Range;

class Lisu extends RangeAbstract
{
    const RANGE_NAME = 'Lisu';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A4D0',
            'A4FF',
        ];
    }
}
