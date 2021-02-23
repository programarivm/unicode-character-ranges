<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Balinese extends AbstractRange
{
    const RANGE_NAME = 'Balinese';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;

        $this->range = [
            '1B00',
            '1B7F',
        ];

        $this->keywords = [
            'indonesia',
        ];
    }
}
