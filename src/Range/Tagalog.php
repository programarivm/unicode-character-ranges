<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Tagalog extends AbstractRange
{
    const RANGE_NAME = 'Tagalog';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1700',
            '171F',
        ];
    }
}
