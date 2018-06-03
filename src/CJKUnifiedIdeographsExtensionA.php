<?php

namespace UnicodeCharacterRanges;

class CJKUnifiedIdeographsExtensionA extends CharacterRange
{
    const RANGE_NAME = 'CJK Unified Ideographs Extension A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3400',
            '4DBF',
        ];
    }
}
