<?php

namespace UnicodeCharacterRanges\Range;

class CyrillicExtendedA extends RangeAbstract
{
    const RANGE_NAME = 'Cyrillic Extended-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2DE0',
            '2DFF',
        ];
    }
}
