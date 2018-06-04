<?php

namespace UnicodeRanges\Range;

class Lepcha extends RangeAbstract
{
    const RANGE_NAME = 'Lepcha';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1C00',
            '1C4F',
        ];
    }
}
