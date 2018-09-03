<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class MeeteiMayek extends AbstractRange
{
    const RANGE_NAME = 'Meetei Mayek';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'ABC0',
            'ABFF',
        ];
    }
}
