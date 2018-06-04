<?php

namespace UnicodeCharacterRanges;

class VerticalForms extends CharacterRange
{
    const RANGE_NAME = 'Vertical Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FE10',
            'FE1F',
        ];
    }
}
