<?php

namespace UnicodeRanges\Range;

class CJKRadicalsSupplement extends RangeAbstract
{
    const RANGE_NAME = 'CJK Radicals Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2E80',
            '2EFF',
        ];
    }
}
