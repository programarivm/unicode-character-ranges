<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class YiRadicals extends AbstractRange
{
    const RANGE_NAME = 'Yi Radicals';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A490',
            'A4CF',
        ];
    }
}
