<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CurrencySymbols extends AbstractRange
{
    const RANGE_NAME = 'Currency Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '20A0',
            '20CF',
        ];
    }
}
