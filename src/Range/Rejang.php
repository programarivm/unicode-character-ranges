<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Rejang extends AbstractRange
{
    const RANGE_NAME = 'Rejang';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A930',
            'A95F',
        ];
    }
}
