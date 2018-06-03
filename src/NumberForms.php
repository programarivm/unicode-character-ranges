<?php

namespace UnicodeCharacterRanges;

class NumberForms extends CharacterRange
{
    const RANGE_NAME = 'Number Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2150',
            '218F',
        ],
            'dec' => [
            8528,
            8591,
        ],
        ];
    }
}
