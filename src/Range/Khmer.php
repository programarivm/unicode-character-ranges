<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Khmer extends AbstractRange
{
    const RANGE_NAME = 'Khmer';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1780',
            '17FF',
        ];
    }
}
