<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class CurrencySymbols extends RangeAbstract
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
