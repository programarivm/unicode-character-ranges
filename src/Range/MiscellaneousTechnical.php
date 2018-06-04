<?php

namespace UnicodeRanges\Range;

class MiscellaneousTechnical extends RangeAbstract
{
    const RANGE_NAME = 'Miscellaneous Technical';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2300',
            '23FF',
        ];
    }
}
