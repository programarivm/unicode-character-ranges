<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Devanagari extends AbstractRange
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
