<?php

namespace UnicodeCharacterRanges;

class BlockElements extends CharacterRange
{
    const RANGE_NAME = 'Block Elements';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2580',
            '259F',
        ],
            'dec' => [
            9600,
            9631,
        ],
        ];
    }
}
