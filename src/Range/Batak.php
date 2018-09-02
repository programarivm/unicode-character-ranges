<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Batak extends RangeAbstract
{
    const RANGE_NAME = 'Batak';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1BC0',
            '1BFF',
        ];
    }
}
