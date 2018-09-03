<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class ArabicExtendedA extends AbstractRange
{
    const RANGE_NAME = 'Arabic Extended-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '08A0',
            '08FF',
        ];
    }
}
