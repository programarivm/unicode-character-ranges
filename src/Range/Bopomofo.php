<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Bopomofo extends AbstractRange
{
    const RANGE_NAME = 'Bopomofo';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3100',
            '312F',
        ];
    }
}
