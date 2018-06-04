<?php

namespace UnicodeRanges\Range;

class PhoneticExtensions extends RangeAbstract
{
    const RANGE_NAME = 'Phonetic Extensions';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1D00',
            '1D7F',
        ];
    }
}
