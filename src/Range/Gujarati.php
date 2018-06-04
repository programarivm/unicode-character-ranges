<?php

namespace UnicodeCharacterRanges\Range;

class Gujarati extends RangeAbstract
{
    const RANGE_NAME = 'Gujarati';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0A80',
            '0AFF',
        ];
    }
}
