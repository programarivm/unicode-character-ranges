<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class GeneralPunctuation extends RangeAbstract
{
    const RANGE_NAME = 'General Punctuation';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2000',
            '206F',
        ];
    }
}
