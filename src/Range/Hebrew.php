<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Hebrew extends AbstractRange
{
    const RANGE_NAME = 'Hebrew';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0590',
            '05FF',
        ];
    }
}
