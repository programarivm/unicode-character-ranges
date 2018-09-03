<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CJKUnifiedIdeographsExtensionA extends AbstractRange
{
    const RANGE_NAME = 'CJK Unified Ideographs Extension A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3400',
            '4DBF',
        ];
    }
}
