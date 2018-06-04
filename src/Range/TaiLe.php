<?php

namespace UnicodeRanges\Range;

class TaiLe extends RangeAbstract
{
    const RANGE_NAME = 'Tai Le';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1950',
            '197F',
        ];
    }
}
