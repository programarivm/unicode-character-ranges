<?php

namespace UnicodeCharacterRanges;

class ArabicExtendedA extends CharacterRange
{
    const RANGE_NAME = 'Arabic Extended-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '08A0',
            '08FF',
        ],
            'dec' => [
            2208,
            2303,
        ],
        ];
    }
}
