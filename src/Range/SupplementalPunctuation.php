<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class SupplementalPunctuation extends RangeAbstract
{
    const RANGE_NAME = 'Supplemental Punctuation';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2E00',
            '2E7F',
        ];
    }
}
