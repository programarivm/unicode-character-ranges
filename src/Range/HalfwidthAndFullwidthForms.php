<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class HalfwidthAndFullwidthForms extends AbstractRange
{
    const RANGE_NAME = 'Halfwidth and Fullwidth Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FF00',
            'FFEF',
        ];
    }
}
