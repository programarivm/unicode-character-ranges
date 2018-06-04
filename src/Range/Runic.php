<?php

namespace UnicodeRanges\Range;

class Runic extends RangeAbstract
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
