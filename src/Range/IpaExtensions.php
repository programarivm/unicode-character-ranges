<?php

namespace UnicodeRanges\Range;

class IpaExtensions extends RangeAbstract
{
    const RANGE_NAME = 'IPA Extensions';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0250',
            '02AF',
        ];
    }
}
