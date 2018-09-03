<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class MyanmarExtendedB extends AbstractRange
{
    const RANGE_NAME = 'Myanmar Extended-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A9E0',
            'A9FF',
        ];
    }
}
