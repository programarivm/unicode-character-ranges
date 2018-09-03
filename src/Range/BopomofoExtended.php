<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class BopomofoExtended extends AbstractRange
{
    const RANGE_NAME = 'Bopomofo Extended';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '31A0',
            '31BF',
        ];
    }
}
