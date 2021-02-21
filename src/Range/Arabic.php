<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Arabic extends AbstractRange
{
    const RANGE_NAME = 'Arabic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;

        $this->range = [
            '0600',
            '06FF',
        ];

        $this->keywords = [
            'indic',
            'hindu',
            'digit',
        ];
    }
}
