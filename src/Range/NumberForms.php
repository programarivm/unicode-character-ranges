<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class NumberForms extends AbstractRange
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
