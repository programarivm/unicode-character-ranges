<?php

namespace UnicodeRanges\Range;

class Limbu extends RangeAbstract
{
    const RANGE_NAME = 'Limbu';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1900',
            '194F',
        ];
    }
}
