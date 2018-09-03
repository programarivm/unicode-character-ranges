<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CJKCompatibilityForms extends AbstractRange
{
    const RANGE_NAME = 'CJK Compatibility Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FE30',
            'FE4F',
        ];
    }
}
