<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class ArabicSupplement extends AbstractRange
{
    const RANGE_NAME = 'Arabic Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0750',
            '077F',
        ];
    }
}
