<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Kannada extends RangeAbstract
{
    const RANGE_NAME = 'Kannada';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0C80',
            '0CFF',
        ];
    }
}
