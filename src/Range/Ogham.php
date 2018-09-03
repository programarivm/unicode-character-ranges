<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Ogham extends AbstractRange
{
    const RANGE_NAME = 'Ogham';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1680',
            '169F',
        ];
    }
}
