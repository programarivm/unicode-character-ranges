<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class EthiopicExtended extends AbstractRange
{
    const RANGE_NAME = 'Ethiopic Extended';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2D80',
            '2DDF',
        ];
    }
}
