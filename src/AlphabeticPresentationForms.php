<?php

namespace UnicodeCharacterRanges;

class AlphabeticPresentationForms extends CharacterRange
{
    const RANGE_NAME = 'Alphabetic Presentation Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FB00',
            'FB4F',
        ];
    }
}
