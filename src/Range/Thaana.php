<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Thaana extends AbstractRange
{
    const RANGE_NAME = 'Thaana';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0780',
            '07BF',
        ];
    }
}
