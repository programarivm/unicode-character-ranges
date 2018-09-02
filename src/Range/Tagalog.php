<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Tagalog extends RangeAbstract
{
    const RANGE_NAME = 'Tagalog';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1700',
            '171F',
        ];
    }
}
