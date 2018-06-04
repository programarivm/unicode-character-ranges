<?php

namespace UnicodeCharacterRanges\Range;

class UnifiedCanadianAboriginalSyllabicsExtended extends RangeAbstract
{
    const RANGE_NAME = 'Unified Canadian Aboriginal Syllabics Extended';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '18B0',
            '18FF',
        ];
    }
}
