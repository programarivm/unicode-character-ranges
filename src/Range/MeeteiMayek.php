<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class MeeteiMayek extends RangeAbstract
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
