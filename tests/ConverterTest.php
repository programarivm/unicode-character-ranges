<?php

namespace UnicodeRanges\Tests;

use UnicodeRanges\Converter;
use UnicodeRanges\Exception\CharacterLengthException;
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
     * @test
     */
    public function dec2unicode_120596()
    {
        $this->assertEquals('𝜔', Converter::dec2unicode(120596));
    }

    public function dec2unicodeData()
    {
        return [
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
            [194679, '屠'],
        ];
    }

    public function unicode2decData()
    {
        return [
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
            ['屠', 194679],
        ];
    }

    public function unicode2hexData()
    {
        return [
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
            ['屠', '2F877'],
        ];
    }
}
