<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Cherokee extends AbstractRange
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
