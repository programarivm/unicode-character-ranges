<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class GreekExtended extends AbstractRange
{
    const RANGE_NAME = 'Greek Extended';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1F00',
            '1FFF',
        ];
    }
}
