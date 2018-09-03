<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class EnclosedAlphanumerics extends AbstractRange
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
