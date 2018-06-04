<?php

namespace UnicodeCharacterRanges\Range;

class LinearBSyllabary extends RangeAbstract
{
    const RANGE_NAME = 'Linear B Syllabary';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '10000',
            '1007F',
        ];
    }
}
