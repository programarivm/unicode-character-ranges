<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Arrows extends AbstractRange
{
    const RANGE_NAME = 'Arrows';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;

        $this->range = [
            '2190',
            '21FF',
        ];

        $this->keywords = [
            'line',
            'curve',
            'semicircle',
            'symbol',
            'barb',
        ];
    }
}
