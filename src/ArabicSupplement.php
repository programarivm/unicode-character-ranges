<?php

namespace UnicodeCharacterRanges;

class ArabicSupplement extends CharacterRange
{
    const RANGE_NAME = 'Arabic Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '0750',
            '077F',
        ],
            'dec' => [
            1872,
            1919,
        ],
        ];
    }
}
