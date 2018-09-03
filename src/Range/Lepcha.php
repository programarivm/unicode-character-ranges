<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Lepcha extends AbstractRange
{
    const RANGE_NAME = 'Lepcha';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1C00',
            '1C4F',
        ];
    }
}
