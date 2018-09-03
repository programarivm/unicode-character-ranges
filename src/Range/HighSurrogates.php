<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class HighSurrogates extends AbstractRange
{
    const RANGE_NAME = 'High Surrogates';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'D800',
            'DB7F',
        ];
    }
}
