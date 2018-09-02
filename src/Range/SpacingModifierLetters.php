<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class SpacingModifierLetters extends RangeAbstract
{
    const RANGE_NAME = 'Spacing Modifier Letters';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '02B0',
            '02FF',
        ];
    }
}
