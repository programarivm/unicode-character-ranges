<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class EthiopicSupplement extends AbstractRange
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
