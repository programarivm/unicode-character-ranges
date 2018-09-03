<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class OlChiki extends AbstractRange
{
    const RANGE_NAME = 'Ol Chiki';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1C50',
            '1C7F',
        ];
    }
}
