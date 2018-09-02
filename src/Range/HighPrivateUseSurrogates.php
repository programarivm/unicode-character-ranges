<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class HighPrivateUseSurrogates extends RangeAbstract
{
    const RANGE_NAME = 'High Private Use Surrogates';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'DB80',
            'DBFF',
        ];
    }
}
