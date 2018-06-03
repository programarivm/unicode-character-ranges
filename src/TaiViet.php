<?php

namespace UnicodeCharacterRanges;

class TaiViet extends CharacterRange
{
    const RANGE_NAME = 'Tai Viet';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AA80',
            'AADF',
        ];
    }
}
