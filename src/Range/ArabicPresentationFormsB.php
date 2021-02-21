<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class ArabicPresentationFormsB extends AbstractRange
{
    const RANGE_NAME = 'Arabic Presentation Forms-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;

        $this->range = [
            'FE70',
            'FEFF',
        ];

        $this->keywords = [
            'spacing',
            'diacritic',
            'context',
            'letter',
        ];
    }
}
