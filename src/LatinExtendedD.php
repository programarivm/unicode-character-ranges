<?php

namespace UnicodeCharacterRanges;

class LatinExtendedD extends CharacterRange
{
    const RANGE_NAME = 'Latin Extended-D';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A720',
            'A7FF',
        ];
    }
}
