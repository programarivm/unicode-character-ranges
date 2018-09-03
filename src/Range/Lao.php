<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Lao extends AbstractRange
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
