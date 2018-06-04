<?php

namespace UnicodeCharacterRanges\Range;

class KangxiRadicals extends RangeAbstract
{
    const RANGE_NAME = 'Kangxi Radicals';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2F00',
            '2FDF',
        ];
    }
}
