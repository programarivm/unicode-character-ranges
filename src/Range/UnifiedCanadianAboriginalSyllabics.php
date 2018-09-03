<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class UnifiedCanadianAboriginalSyllabics extends AbstractRange
{
    const RANGE_NAME = 'Unified Canadian Aboriginal Syllabics';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1400',
            '167F',
        ];
    }
}
