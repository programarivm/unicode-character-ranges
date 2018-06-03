<?php

namespace UnicodeCharacterRanges;

class Devanagari extends CharacterRange
{
    const RANGE_NAME = 'Devanagari';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0900',
            '097F',
        ],
            'dec' => [
            2304,
            2431,
        ],
        ];
    }
}
