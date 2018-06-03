<?php

namespace UnicodeCharacterRanges;

class ControlPictures extends CharacterRange
{
    const RANGE_NAME = 'Control Pictures';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2400',
            '243F',
        ],
            'dec' => [
            9216,
            9279,
        ],
        ];
    }
}
