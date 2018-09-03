<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Myanmar extends AbstractRange
{
    const RANGE_NAME = 'Myanmar';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1000',
            '109F',
        ];
    }
}
