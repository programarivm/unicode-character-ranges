<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Samaritan extends AbstractRange
{
    const RANGE_NAME = 'Samaritan';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0800',
            '083F',
        ];
    }
}
