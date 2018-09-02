<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class VariationSelectors extends RangeAbstract
{
    const RANGE_NAME = 'Variation Selectors';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FE00',
            'FE0F',
        ];
    }
}
