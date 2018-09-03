<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Vai extends AbstractRange
{
    const RANGE_NAME = 'Vai';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A500',
            'A63F',
        ];
    }
}
