<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Runic extends AbstractRange
{
    const RANGE_NAME = 'Runic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '16A0',
            '16FF',
        ];
    }
}
