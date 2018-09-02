<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class MathematicalOperators extends RangeAbstract
{
    const RANGE_NAME = 'Mathematical Operators';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2200',
            '22FF',
        ];
    }
}
