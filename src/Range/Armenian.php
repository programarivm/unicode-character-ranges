<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Armenian extends RangeAbstract
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
