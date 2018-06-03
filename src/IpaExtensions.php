<?php

namespace UnicodeCharacterRanges;

class IpaExtensions extends CharacterRange
{
    const RANGE_NAME = 'IPA Extensions';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0250',
            '02AF',
        ];
    }
}
