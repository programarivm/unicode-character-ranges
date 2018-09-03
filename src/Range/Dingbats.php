<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Dingbats extends AbstractRange
{
    const RANGE_NAME = 'Dingbats';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2700',
            '27BF',
        ];
    }
}
