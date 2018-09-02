<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Oriya extends RangeAbstract
{
    const RANGE_NAME = 'Oriya';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0B00',
            '0B7F',
        ];
    }
}
