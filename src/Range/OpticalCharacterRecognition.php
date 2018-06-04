<?php

namespace UnicodeRanges\Range;

class OpticalCharacterRecognition extends RangeAbstract
{
    const RANGE_NAME = 'Optical Character Recognition';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2440',
            '245F',
        ];
    }
}
