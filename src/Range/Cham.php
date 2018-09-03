<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Cham extends AbstractRange
{
    const RANGE_NAME = 'Cham';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AA00',
            'AA5F',
        ];
    }
}
