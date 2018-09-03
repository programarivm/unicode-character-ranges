<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class MathematicalOperators extends AbstractRange
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
