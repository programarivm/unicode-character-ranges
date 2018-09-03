<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Bengali extends AbstractRange
{
    const RANGE_NAME = 'Bengali';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0980',
            '09FF',
        ];
    }
}
