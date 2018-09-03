<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Kanbun extends AbstractRange
{
    const RANGE_NAME = 'Kanbun';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3190',
            '319F',
        ];
    }
}
