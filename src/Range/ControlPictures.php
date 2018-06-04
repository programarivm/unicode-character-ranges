<?php

namespace UnicodeRanges\Range;

class ControlPictures extends RangeAbstract
{
    const RANGE_NAME = 'Control Pictures';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2400',
            '243F',
        ];
    }
}
