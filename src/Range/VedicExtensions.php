<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class VedicExtensions extends AbstractRange
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
