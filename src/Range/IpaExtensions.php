<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class IpaExtensions extends AbstractRange
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
