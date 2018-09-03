<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class OpticalCharacterRecognition extends AbstractRange
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
