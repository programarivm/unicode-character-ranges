<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class ArabicPresentationFormsA extends AbstractRange
{
    const RANGE_NAME = 'Arabic Presentation Forms-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;

        $this->range = [
            'FB50',
            'FDFF',
        ];

        $this->keywords = [
            'ligature',
            'persian',
            'urdu',
            'sindhi',
            'central',
            'asia',
        ];
    }
}
