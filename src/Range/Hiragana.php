<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Hiragana extends RangeAbstract
{
    const RANGE_NAME = 'Hiragana';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3040',
            '309F',
        ];
    }
}
