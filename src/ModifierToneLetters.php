<?php

namespace UnicodeCharacterRanges;

class ModifierToneLetters extends CharacterRange
{
    const RANGE_NAME = 'Modifier Tone Letters';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A700',
            'A71F',
        ];
    }
}
