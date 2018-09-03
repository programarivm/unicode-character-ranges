<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Georgian extends AbstractRange
{
    const RANGE_NAME = 'Georgian';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '10A0',
            '10FF',
        ];
    }
}
