<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class AlphabeticPresentationForms extends AbstractRange
{
    const RANGE_NAME = 'Alphabetic Presentation Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;

        $this->range = [
            'FB00',
            'FB4F',
        ];

        $this->keywords = [
            'ligature',
            'latin',
            'armenian',
            'hebrew',
        ];
    }
}
