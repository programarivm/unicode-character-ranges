<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Tamil extends AbstractRange
{
    const RANGE_NAME = 'Tamil';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0B80',
            '0BFF',
        ];
    }
}
