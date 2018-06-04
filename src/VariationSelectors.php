<?php

namespace UnicodeCharacterRanges;

class VariationSelectors extends CharacterRange
{
    const RANGE_NAME = 'Variation Selectors';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FE00',
            'FE0F',
        ];
    }
}
