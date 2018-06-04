<?php

namespace UnicodeRanges\Range;

class GreekExtended extends RangeAbstract
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
