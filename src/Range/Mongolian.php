<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Mongolian extends RangeAbstract
{
    const RANGE_NAME = 'Mongolian';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1800',
            '18AF',
        ];
    }
}
