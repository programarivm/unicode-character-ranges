<?php

namespace UnicodeCharacterRanges\Range;

class GeorgianSupplement extends RangeAbstract
{
    const RANGE_NAME = 'Georgian Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2D00',
            '2D2F',
        ];
    }
}
