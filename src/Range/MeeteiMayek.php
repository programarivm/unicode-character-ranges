<?php

namespace UnicodeRanges\Range;

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
