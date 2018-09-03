<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Lisu extends AbstractRange
{
    const RANGE_NAME = 'Lisu';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A4D0',
            'A4FF',
        ];
    }
}
