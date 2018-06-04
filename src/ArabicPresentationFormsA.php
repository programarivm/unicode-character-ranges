<?php

namespace UnicodeCharacterRanges;

class ArabicPresentationFormsA extends CharacterRange
{
    const RANGE_NAME = 'Arabic Presentation Forms-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'FB50',
            'FDFF',
        ];
    }
}
