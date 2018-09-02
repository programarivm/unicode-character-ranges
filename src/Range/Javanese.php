<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Javanese extends RangeAbstract
{
    const RANGE_NAME = 'Javanese';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A980',
            'A9DF',
        ];
    }
}
