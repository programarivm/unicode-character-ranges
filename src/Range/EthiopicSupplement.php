<?php

namespace UnicodeRanges\Range;

class EthiopicSupplement extends RangeAbstract
{
    const RANGE_NAME = 'Ethiopic Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1380',
            '139F',
        ];
    }
}
