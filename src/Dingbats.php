<?php

namespace UnicodeCharacterRanges;

class Dingbats extends CharacterRange
{
    const RANGE_NAME = 'Dingbats';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2700',
            '27BF',
        ],
            'dec' => [
            9984,
            10175,
        ],
        ];
    }
}
