<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Specials extends AbstractRange
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
