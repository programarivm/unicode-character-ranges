<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Specials extends RangeAbstract
{
    const RANGE_NAME = 'Specials';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FFF0',
            'FFFF',
        ];
    }
}
