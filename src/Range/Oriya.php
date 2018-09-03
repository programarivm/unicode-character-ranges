<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Oriya extends AbstractRange
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
