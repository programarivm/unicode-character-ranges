<?php

namespace UnicodeCharacterRanges;

class BoxDrawing extends CharacterRange
{
    const RANGE_NAME = 'Box Drawing';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2500',
            '257F',
        ],
            'dec' => [
            9472,
            9599,
        ],
        ];
    }
}
