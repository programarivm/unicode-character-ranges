<?php

namespace UnicodeRanges\Range;

class VedicExtensions extends RangeAbstract
{
    const RANGE_NAME = 'Vedic Extensions';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1CD0',
            '1CFF',
        ];
    }
}
