<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Gujarati extends AbstractRange
{
    const RANGE_NAME = 'Gujarati';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0A80',
            '0AFF',
        ];
    }
}
