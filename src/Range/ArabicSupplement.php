<?php

namespace UnicodeCharacterRanges\Range;

class ArabicSupplement extends RangeAbstract
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
