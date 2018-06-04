<?php

namespace UnicodeRanges\Range;

class Malayalam extends RangeAbstract
{
    const RANGE_NAME = 'Malayalam';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0D00',
            '0D7F',
        ];
    }
}
