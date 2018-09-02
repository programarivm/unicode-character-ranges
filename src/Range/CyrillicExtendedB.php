<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class CyrillicExtendedB extends RangeAbstract
{
    const RANGE_NAME = 'Cyrillic Extended-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A640',
            'A69F',
        ];
    }
}
