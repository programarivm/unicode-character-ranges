<?php

namespace UnicodeCharacterRanges\Range;

class SuperscriptsAndSubscripts extends RangeAbstract
{
    const RANGE_NAME = 'Superscripts and Subscripts';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2070',
            '209F',
        ];
    }
}
