<?php

namespace UnicodeRanges\Range;

class BoxDrawing extends RangeAbstract
{
    const RANGE_NAME = 'Box Drawing';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2500',
            '257F',
        ];
    }
}
