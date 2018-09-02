<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Tifinagh extends RangeAbstract
{
    const RANGE_NAME = 'Tifinagh';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2D30',
            '2D7F',
        ];
    }
}
