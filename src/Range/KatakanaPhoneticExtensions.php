<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class KatakanaPhoneticExtensions extends AbstractRange
{
    const RANGE_NAME = 'Katakana Phonetic Extensions';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '31F0',
            '31FF',
        ];
    }
}
