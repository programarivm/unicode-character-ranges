<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class LinearBIdeograms extends AbstractRange
{
    const RANGE_NAME = 'Linear B Ideograms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '10080',
            '100FF',
        ];
    }
}
