<?php

namespace UnicodeRanges\Range;

class ModifierToneLetters extends RangeAbstract
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
