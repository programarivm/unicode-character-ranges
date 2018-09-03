<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class IdeographicDescriptionCharacters extends AbstractRange
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
