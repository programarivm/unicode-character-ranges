<?php

namespace UnicodeRanges\Range;

class TaiTham extends RangeAbstract
{
    const RANGE_NAME = 'Tai Tham';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1A20',
            '1AAF',
        ];
    }
}