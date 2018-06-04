<?php

namespace UnicodeRanges\Range;

class CJKUnifiedIdeographs extends RangeAbstract
{
    const RANGE_NAME = 'CJK Unified Ideographs';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '4E00',
            '9FFF',
        ];
    }
}
