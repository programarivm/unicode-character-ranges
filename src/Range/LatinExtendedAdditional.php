<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class LatinExtendedAdditional extends AbstractRange
{
    const RANGE_NAME = 'Latin Extended Additional';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1E00',
            '1EFF',
        ];
    }
}
