<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class NKo extends AbstractRange
{
    const RANGE_NAME = 'NKo';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '07C0',
            '07FF',
        ];
    }
}
