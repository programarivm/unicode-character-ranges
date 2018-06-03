<?php

namespace UnicodeCharacterRanges;

class OlChiki extends CharacterRange
{
    const RANGE_NAME = 'Ol Chiki';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1C50',
            '1C7F',
        ],
            'dec' => [
            7248,
            7295,
        ],
        ];
    }
}
