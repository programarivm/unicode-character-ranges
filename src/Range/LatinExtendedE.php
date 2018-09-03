<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class LatinExtendedE extends AbstractRange
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
