<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class KangxiRadicals extends AbstractRange
{
    const RANGE_NAME = 'Kangxi Radicals';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2F00',
            '2FDF',
        ];
    }
}
