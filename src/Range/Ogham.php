<?php

namespace UnicodeRanges\Range;

class Ogham extends RangeAbstract
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
