<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Tagbanwa extends AbstractRange
{
    const RANGE_NAME = 'Tagbanwa';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1760',
            '177F',
        ];
    }
}
