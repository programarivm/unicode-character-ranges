<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Bamum extends AbstractRange
{
    const RANGE_NAME = 'Bamum';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A6A0',
            'A6FF',
        ];
    }
}
