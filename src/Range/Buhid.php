<?php

namespace UnicodeRanges\Range;

class Buhid extends RangeAbstract
{
    const RANGE_NAME = 'Buhid';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1740',
            '175F',
        ];
    }
}