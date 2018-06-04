<?php

namespace UnicodeCharacterRanges\Range;

class TaiViet extends RangeAbstract
{
    const RANGE_NAME = 'Tai Viet';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AA80',
            'AADF',
        ];
    }
}
