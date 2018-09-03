<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class GeneralPunctuation extends AbstractRange
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
