<?php

namespace UnicodeRanges;

use UnicodeRanges\Converter;

class Randomizer
{
    public static function char(array $charRanges)
    {
        $key = array_rand($charRanges, 1);
        $rand = rand(
            hexdec($charRanges[$key]->range()[0]),
            hexdec($charRanges[$key]->range()[1])
        );
        return Converter::dec2unicode($rand);
    }
}
