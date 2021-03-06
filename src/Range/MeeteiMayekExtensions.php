<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class MeeteiMayekExtensions extends AbstractRange
{
    const RANGE_NAME = 'Meetei Mayek Extensions';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AAE0',
            'AAFF',
        ];
    }
}
