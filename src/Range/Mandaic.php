<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Mandaic extends AbstractRange
{
    const RANGE_NAME = 'Mandaic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0840',
            '085F',
        ];
    }
}
