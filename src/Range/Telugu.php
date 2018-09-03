<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Telugu extends AbstractRange
{
    const RANGE_NAME = 'Telugu';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0C00',
            '0C7F',
        ];
    }
}
