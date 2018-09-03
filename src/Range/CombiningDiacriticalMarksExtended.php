<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CombiningDiacriticalMarksExtended extends AbstractRange
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
