<?php

namespace UnicodeCharacterRanges;

class MiscellaneousSymbols extends CharacterRange
{
    const RANGE_NAME = 'Miscellaneous Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2600',
            '26FF',
        ],
            'dec' => [
            9728,
            9983,
        ],
        ];
    }
}
