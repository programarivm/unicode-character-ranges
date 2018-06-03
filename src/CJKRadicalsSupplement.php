<?php

namespace UnicodeCharacterRanges;

class CJKRadicalsSupplement extends CharacterRange
{
    const RANGE_NAME = 'CJK Radicals Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2E80',
            '2EFF',
        ];
    }
}
