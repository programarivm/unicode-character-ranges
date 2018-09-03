<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class ControlPictures extends AbstractRange
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
