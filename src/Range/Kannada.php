<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Kannada extends AbstractRange
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
