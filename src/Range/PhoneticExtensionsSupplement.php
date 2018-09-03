<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class PhoneticExtensionsSupplement extends AbstractRange
{
    const RANGE_NAME = 'Phonetic Extensions Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1D80',
            '1DBF',
        ];
    }
}
