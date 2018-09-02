<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class EnclosedAlphanumerics extends RangeAbstract
{
    const RANGE_NAME = 'Enclosed Alphanumerics';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2460',
            '24FF',
        ];
    }
}
