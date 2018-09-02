<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class ArabicPresentationFormsB extends RangeAbstract
{
    const RANGE_NAME = 'Arabic Presentation Forms-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FE70',
            'FEFF',
        ];
    }
}
