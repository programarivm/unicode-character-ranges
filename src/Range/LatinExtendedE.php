<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class LatinExtendedE extends RangeAbstract
{
    const RANGE_NAME = 'Latin Extended-E';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AB30',
            'AB6F',
        ];
    }
}
