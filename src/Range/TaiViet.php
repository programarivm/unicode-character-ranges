<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class TaiViet extends RangeAbstract
{
    const RANGE_NAME = 'Tai Viet';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AA80',
            'AADF',
        ];
    }
}
