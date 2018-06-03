<?php

namespace UnicodeCharacterRanges;

class SuperscriptsAndSubscripts extends CharacterRange
{
    const RANGE_NAME = 'Superscripts and Subscripts';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2070',
            '209F',
        ],
            'dec' => [
            8304,
            8351,
        ],
        ];
    }
}
