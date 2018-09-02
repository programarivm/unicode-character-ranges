<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Cham extends RangeAbstract
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
