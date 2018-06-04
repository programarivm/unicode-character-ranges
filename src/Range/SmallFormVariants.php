<?php

namespace UnicodeRanges\Range;

class SmallFormVariants extends RangeAbstract
{
    const RANGE_NAME = 'Small Form Variants';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FE50',
            'FE6F',
        ];
    }
}
