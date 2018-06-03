<?php

namespace UnicodeCharacterRanges;

class TaiTham extends CharacterRange
{
    const RANGE_NAME = 'Tai Tham';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1A20',
            '1AAF',
        ];
    }
}
