<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class HangulCompatibilityJamo extends RangeAbstract
{
    const RANGE_NAME = 'Hangul Compatibility Jamo';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3130',
            '318F',
        ];
    }
}
