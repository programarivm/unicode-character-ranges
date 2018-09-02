<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class CombiningDiacriticalMarksExtended extends RangeAbstract
{
    const RANGE_NAME = 'Combining Diacritical Marks Extended';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1AB0',
            '1AFF',
        ];
    }
}
