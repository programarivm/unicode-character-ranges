<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class PhagsPa extends RangeAbstract
{
    const RANGE_NAME = 'Phags-pa';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A840',
            'A87F',
        ];
    }
}
