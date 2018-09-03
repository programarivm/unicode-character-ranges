<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class MiscellaneousTechnical extends AbstractRange
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
