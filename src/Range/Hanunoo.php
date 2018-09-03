<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Hanunoo extends AbstractRange
{
    const RANGE_NAME = 'Hanunoo';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1720',
            '173F',
        ];
    }
}
