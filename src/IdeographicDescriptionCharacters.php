<?php

namespace UnicodeCharacterRanges;

class IdeographicDescriptionCharacters extends CharacterRange
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
