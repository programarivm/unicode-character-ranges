<?php

namespace UnicodeCharacterRanges\Range;

class Tamil extends RangeAbstract
{
    const RANGE_NAME = 'Tamil';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0B80',
            '0BFF',
        ];
    }
}
