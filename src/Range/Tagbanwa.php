<?php

namespace UnicodeCharacterRanges\Range;

class Tagbanwa extends RangeAbstract
{
    const RANGE_NAME = 'Tagbanwa';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1760',
            '177F',
        ];
    }
}
