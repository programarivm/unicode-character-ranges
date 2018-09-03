<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Armenian extends AbstractRange
{
    const RANGE_NAME = 'Armenian';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0530',
            '058F',
        ];
    }
}
