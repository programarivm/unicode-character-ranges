<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class BlockElements extends AbstractRange
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
