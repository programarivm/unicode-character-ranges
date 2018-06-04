<?php

namespace UnicodeRanges\Range;

class BlockElements extends RangeAbstract
{
    const RANGE_NAME = 'Block Elements';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2580',
            '259F',
        ];
    }
}
