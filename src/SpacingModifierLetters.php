<?php

namespace UnicodeCharacterRanges;

class SpacingModifierLetters extends CharacterRange
{
    const RANGE_NAME = 'Spacing Modifier Letters';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '02B0',
            '02FF',
        ],
            'dec' => [
            688,
            767,
        ],
        ];
    }
}
