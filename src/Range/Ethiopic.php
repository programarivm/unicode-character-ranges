<?php

namespace UnicodeRanges\Range;

class Ethiopic extends RangeAbstract
{
    const RANGE_NAME = 'Ethiopic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1200',
            '137F',
        ];
    }
}
