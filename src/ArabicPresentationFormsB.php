<?php

namespace UnicodeCharacterRanges;

class ArabicPresentationFormsB extends CharacterRange
{
    const RANGE_NAME = 'Arabic Presentation Forms-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FE70',
            'FEFF',
        ];
    }
}
