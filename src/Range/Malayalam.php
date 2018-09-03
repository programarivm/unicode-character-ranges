<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Malayalam extends AbstractRange
{
    const RANGE_NAME = 'Malayalam';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0D00',
            '0D7F',
        ];
    }
}
