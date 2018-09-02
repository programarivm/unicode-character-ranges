<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class AlphabeticPresentationForms extends RangeAbstract
{
    const RANGE_NAME = 'Alphabetic Presentation Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FB00',
            'FB4F',
        ];
    }
}
