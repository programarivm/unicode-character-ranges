<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Sundanese extends RangeAbstract
{
    const RANGE_NAME = 'Sundanese';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1B80',
            '1BBF',
        ];
    }
}
