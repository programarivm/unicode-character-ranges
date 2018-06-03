<?php

namespace UnicodeCharacterRanges;

class EthiopicExtendedA extends CharacterRange
{
    const RANGE_NAME = 'Ethiopic Extended-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'AB00',
            'AB2F',
        ];
    }
}
