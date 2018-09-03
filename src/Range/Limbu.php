<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Limbu extends AbstractRange
{
    const RANGE_NAME = 'Limbu';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1900',
            '194F',
        ];
    }
}
