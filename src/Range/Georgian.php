<?php

namespace UnicodeCharacterRanges\Range;

class Georgian extends RangeAbstract
{
    const RANGE_NAME = 'Georgian';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '10A0',
            '10FF',
        ];
    }
}
