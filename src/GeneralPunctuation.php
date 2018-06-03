<?php

namespace UnicodeCharacterRanges;

class GeneralPunctuation extends CharacterRange
{
    const RANGE_NAME = 'General Punctuation';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '2000',
            '206F',
        ],
            'dec' => [
            8192,
            8303,
        ],
        ];
    }
}
