<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class MyanmarExtendedA extends AbstractRange
{
    const RANGE_NAME = 'Myanmar Extended-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AA60',
            'AA7F',
        ];
    }
}
