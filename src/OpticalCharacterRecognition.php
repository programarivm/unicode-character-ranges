<?php

namespace UnicodeCharacterRanges;

class OpticalCharacterRecognition extends CharacterRange
{
    const RANGE_NAME = 'Optical Character Recognition';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2440',
            '245F',
        ],
            'dec' => [
            9280,
            9311,
        ],
        ];
    }
}
