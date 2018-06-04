<?php

namespace UnicodeRanges\Range;

class NumberForms extends RangeAbstract
{
    const RANGE_NAME = 'Number Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2150',
            '218F',
        ];
    }
}
