<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Devanagari extends RangeAbstract
{
    const RANGE_NAME = 'Devanagari';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0900',
            '097F',
        ];
    }
}
