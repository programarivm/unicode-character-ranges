<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Gurmukhi extends AbstractRange
{
    const RANGE_NAME = 'Gurmukhi';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0A00',
            '0A7F',
        ];
    }
}
