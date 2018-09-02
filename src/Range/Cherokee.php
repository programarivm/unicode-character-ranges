<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Cherokee extends RangeAbstract
{
    const RANGE_NAME = 'Cherokee';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '13A0',
            '13FF',
        ];
    }
}
