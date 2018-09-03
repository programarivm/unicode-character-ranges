<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Cyrillic extends AbstractRange
{
    const RANGE_NAME = 'Cyrillic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0400',
            '04FF',
        ];
    }
}
