<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Batak extends AbstractRange
{
    const RANGE_NAME = 'Batak';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1BC0',
            '1BFF',
        ];
    }
}
