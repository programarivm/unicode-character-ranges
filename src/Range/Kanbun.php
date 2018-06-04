<?php

namespace UnicodeCharacterRanges\Range;

class Kanbun extends RangeAbstract
{
    const RANGE_NAME = 'Kanbun';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3190',
            '319F',
        ];
    }
}
