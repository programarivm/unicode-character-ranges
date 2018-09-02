<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class VerticalForms extends RangeAbstract
{
    const RANGE_NAME = 'Vertical Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FE10',
            'FE1F',
        ];
    }
}
