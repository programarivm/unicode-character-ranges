<?php

namespace UnicodeCharacterRanges\Range;

class PrivateUseArea extends RangeAbstract
{
    const RANGE_NAME = 'Private Use Area';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'E000',
            'F8FF',
        ];
    }
}
