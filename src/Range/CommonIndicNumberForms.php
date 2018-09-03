<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CommonIndicNumberForms extends AbstractRange
{
    const RANGE_NAME = 'Common Indic Number Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A830',
            'A83F',
        ];
    }
}
