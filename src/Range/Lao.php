<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Lao extends RangeAbstract
{
    const RANGE_NAME = 'Lao';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0E80',
            '0EFF',
        ];
    }
}
