<?php

namespace UnicodeCharacterRanges\Range;

class HalfwidthAndFullwidthForms extends RangeAbstract
{
    const RANGE_NAME = 'Halfwidth and Fullwidth Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FF00',
            'FFEF',
        ];
    }
}
