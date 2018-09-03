<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class SundaneseSupplement extends AbstractRange
{
    const RANGE_NAME = 'Sundanese Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1CC0',
            '1CCF',
        ];
    }
}
