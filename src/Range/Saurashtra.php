<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Saurashtra extends AbstractRange
{
    const RANGE_NAME = 'Saurashtra';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A880',
            'A8DF',
        ];
    }
}
