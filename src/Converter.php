<?php

namespace UnicodeRanges;

use UnicodeRanges\Exception\CharacterLengthException;

class Converter
{
    public static function dec2unicode($dec)
    {
        if ($dec < 0x80) {
            $utf = chr($dec);
        } elseif ($dec < 0x0800) {
            $utf = chr(0xC0 + ($dec >> 6));
            $utf .= chr(0x80 + ($dec & 0x3f));
        } elseif ($dec < 0x010000) {
            $utf = chr(0xE0 + ($dec >> 12));
            $utf .= chr(0x80 + (($dec >> 6) & 0x3f));
            $utf .= chr(0x80 + ($dec & 0x3f));
        } elseif ($dec < 0x200000) {
            $utf = chr(0xF0 + ($dec >> 18));
            $utf .= chr(0x80 + (($dec >> 12) & 0x3f));
            $utf .= chr(0x80 + (($dec >> 6) & 0x3f));
            $utf .= chr(0x80 + ($dec & 0x3f));
        } else {
            throw new CharacterLengthException('The character exceeded the limit of 4 bytes.');
        }

        return $utf;
    }
}
