<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class TaiViet extends AbstractRange
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
