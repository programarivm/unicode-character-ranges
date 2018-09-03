<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class LinearBSyllabary extends AbstractRange
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
