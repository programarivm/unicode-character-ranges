<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class SylotiNagri extends AbstractRange
{
    const RANGE_NAME = 'Syloti Nagri';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A800',
            'A82F',
        ];
    }
}
