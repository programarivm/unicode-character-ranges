<?php

namespace UnicodeCharacterRanges;

class EthiopicSupplement extends CharacterRange
{
    const RANGE_NAME = 'Ethiopic Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1380',
            '139F',
        ];
    }
}
