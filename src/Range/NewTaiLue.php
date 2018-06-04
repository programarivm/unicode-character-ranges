<?php

namespace UnicodeRanges\Range;

class NewTaiLue extends RangeAbstract
{
    const RANGE_NAME = 'New Tai Lue';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1980',
            '19DF',
        ];
    }
}
