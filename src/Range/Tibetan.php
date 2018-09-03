<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Tibetan extends AbstractRange
{
    const RANGE_NAME = 'Tibetan';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0F00',
            '0FFF',
        ];
    }
}
