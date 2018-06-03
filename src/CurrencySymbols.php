<?php

namespace UnicodeCharacterRanges;

class CurrencySymbols extends CharacterRange
{
    const RANGE_NAME = 'Currency Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '20A0',
            '20CF',
        ],
            'dec' => [
            8352,
            8399,
        ],
        ];
    }
}
