<?php

namespace UnicodeRanges\Range;

class LatinExtendedAdditional extends RangeAbstract
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
