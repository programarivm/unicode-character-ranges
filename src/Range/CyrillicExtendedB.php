<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CyrillicExtendedB extends AbstractRange
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
