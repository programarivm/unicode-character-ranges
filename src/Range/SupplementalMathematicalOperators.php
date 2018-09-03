<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class SupplementalMathematicalOperators extends AbstractRange
{
    const RANGE_NAME = 'Supplemental Mathematical Operators';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2A00',
            '2AFF',
        ];
    }
}
