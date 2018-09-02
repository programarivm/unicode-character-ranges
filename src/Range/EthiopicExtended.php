<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class EthiopicExtended extends RangeAbstract
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
