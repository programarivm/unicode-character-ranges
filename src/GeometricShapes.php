<?php

namespace UnicodeCharacterRanges;

class GeometricShapes extends CharacterRange
{
    const RANGE_NAME = 'Geometric Shapes';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '25A0',
            '25FF',
        ];
    }
}
