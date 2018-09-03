<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class VariationSelectors extends AbstractRange
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
