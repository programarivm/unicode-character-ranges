<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class ArabicPresentationFormsA extends RangeAbstract
{
    const RANGE_NAME = 'Arabic Presentation Forms-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FB50',
            'FDFF',
        ];
    }
}
