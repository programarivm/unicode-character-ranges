<?php

namespace UnicodeCharacterRanges\Range;

class GreekAndCoptic extends RangeAbstract
{
    const RANGE_NAME = 'Greek and Coptic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0370',
            '03FF',
        ];
    }
}
