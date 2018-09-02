<?php

namespace UnicodeRanges\Tests;

use UnicodeRanges\Converter;
use UnicodeRanges\Exception\CharacterLengthException;
use UnicodeRanges\Range\BasicLatin;
use UnicodeRanges\Range\GreekAndCoptic;
use UnicodeRanges\Range\Cyrillic;
use UnicodeRanges\Range\PhoneticExtensions;
use UnicodeRanges\Range\MiscellaneousTechnical;
use UnicodeRanges\Range\CJKRadicalsSupplement;
use UnicodeRanges\Range\CJKUnifiedIdeographs;
use UnicodeRanges\Range\HangulSyllables;
use UnicodeRanges\Range\HangulJamoExtendedB;
use UnicodeRanges\Range\AegeanNumbers;
use UnicodeRanges\Range\Osmanya;
use UnicodeRanges\Range\MusicalSymbols;
use UnicodeRanges\Range\MathematicalAlphanumericSymbols;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    /**
     * @test
     */
    public function char_throws_character_length_exception()
    {
        $this->expectException(CharacterLengthException::class);
        $this->assertEquals('Ξ', Converter::dec2unicode(2120926));
    }

    /**
     * @dataProvider dec2unicodeData
     * @test
     */
    public function dec2unicode($dec, $char)
    {
        $this->assertEquals($char, Converter::dec2unicode($dec));
    }

    /**
     * @dataProvider unicode2decData
     * @test
     */
    public function unicode2dec($char, $dec)
    {
        $this->assertEquals($dec, Converter::unicode2dec($char));
    }

    /**
     * @dataProvider unicode2hexData
     * @test
     */
    public function unicode2hex($char, $hex)
    {
        $this->assertEquals($hex, Converter::unicode2hex($char));
    }

    /**
     * @dataProvider unicode2rangeData
     * @test
     */
    public function unicode2range($char, $rangeName)
    {
        $this->assertEquals($rangeName, Converter::unicode2range($char)->name());
    }

    public function dec2unicodeData()
    {
        return [
            [97, 'a'],
            [926, 'Ξ'],
            [1244, 'Ӝ'],
            [7546, 'ᵺ'],
            [9062, '⍦'],
            [12004, '⻤'],
            [22809, '夙'],
            [45306, '냺'],
            [51050, '읪'],
            [55223, 'ힷ'],
            [65824, '𐄠'],
            [66702, '𐒎'],
            [119072, '𝄠'],
            [120596, '𝜔'],
        ];
    }

    public function unicode2decData()
    {
        return [
            ['a', 97],
            ['Ξ', 926],
            ['Ӝ', 1244],
            ['ᵺ', 7546],
            ['⍦', 9062],
            ['⻤', 12004],
            ['夙', 22809],
            ['냺', 45306],
            ['읪', 51050],
            ['ힷ', 55223],
            ['𐄠', 65824],
            ['𐒎', 66702],
            ['𝄠', 119072],
            ['𝜔', 120596],
        ];
    }

    public function unicode2hexData()
    {
        return [
            ['a', '61'],
            ['Ξ', '39E'],
            ['Ӝ', '4DC'],
            ['ᵺ', '1D7A'],
            ['⍦', '2366'],
            ['⻤', '2EE4'],
            ['夙', '5919'],
            ['냺', 'B0FA'],
            ['읪', 'C76A'],
            ['ힷ', 'D7B7'],
            ['𐄠', '10120'],
            ['𐒎', '1048E'],
            ['𝄠', '1D120'],
            ['𝜔', '1D714'],
        ];
    }

    public function unicode2rangeData()
    {
        return [
            ['a', BasicLatin::RANGE_NAME],
            ['Ξ', GreekAndCoptic::RANGE_NAME],
            ['Ӝ', Cyrillic::RANGE_NAME],
            ['ᵺ', PhoneticExtensions::RANGE_NAME],
            ['⍦', MiscellaneousTechnical::RANGE_NAME],
            ['⻤', CJKRadicalsSupplement::RANGE_NAME],
            ['夙', CJKUnifiedIdeographs::RANGE_NAME],
            ['냺', HangulSyllables::RANGE_NAME],
            ['읪', HangulSyllables::RANGE_NAME],
            ['ힷ', HangulJamoExtendedB::RANGE_NAME],
            ['𐄠', AegeanNumbers::RANGE_NAME],
            ['𐒎', Osmanya::RANGE_NAME],
            ['𝄠', MusicalSymbols::RANGE_NAME],
            ['𝜔', MathematicalAlphanumericSymbols::RANGE_NAME],
        ];
    }
}
