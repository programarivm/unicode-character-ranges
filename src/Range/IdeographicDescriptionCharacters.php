<?php

namespace UnicodeRanges\Range;

class IdeographicDescriptionCharacters extends RangeAbstract
{
    const RANGE_NAME = 'Ideographic Description Characters';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2FF0',
            '2FFF',
        ];
    }
}
