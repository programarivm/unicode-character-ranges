<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CherokeeSupplement extends AbstractRange
{
    const RANGE_NAME = 'Cherokee Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AB70',
            'ABBF',
        ];
    }
}
