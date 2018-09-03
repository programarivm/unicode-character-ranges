<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class LowSurrogates extends AbstractRange
{
    const RANGE_NAME = 'Low Surrogates';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'DC00',
            'DFFF',
        ];
    }
}
