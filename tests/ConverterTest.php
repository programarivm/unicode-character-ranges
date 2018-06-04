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
     * @test
     */
    public function char_926_Ξ()
    {
        $this->assertEquals('Ξ', Converter::dec2unicode(926));
    }

    /**
     * @test
     */
    public function char_1244_Ӝ()
    {
        $this->assertEquals('Ӝ', Converter::dec2unicode(1244));
    }

    /**
     * @test
     */
    public function char_7546_ᵺ()
    {
        $this->assertEquals('ᵺ', Converter::dec2unicode(7546));
    }

    /**
     * @test
     */
    public function char_9062_⍦()
    {
        $this->assertEquals('⍦', Converter::dec2unicode(9062));
    }

    /**
     * @test
     */
    public function char_12004_⻤()
    {
        $this->assertEquals('⻤', Converter::dec2unicode(12004));
    }

    /**
     * @test
     */
    public function char_22809_夙()
    {
        $this->assertEquals('夙', Converter::dec2unicode(22809));
    }

    /**
     * @test
     */
    public function char_45306_냺()
    {
        $this->assertEquals('냺', Converter::dec2unicode(45306));
    }

    /**
     * @test
     */
    public function char_51050_읪()
    {
        $this->assertEquals('읪', Converter::dec2unicode(51050));
    }

    /**
     * @test
     */
    public function char_55223_ힷ()
    {
        $this->assertEquals('ힷ', Converter::dec2unicode(55223));
    }

    /**
     * @test
     */
    public function char_65824_𐄠()
    {
        $this->assertEquals('𐄠', Converter::dec2unicode(65824));
    }

    /**
     * @test
     */
    public function char_66702_𐒎()
    {
        $this->assertEquals('𐒎', Converter::dec2unicode(66702));
    }

    /**
     * @test
     */
    public function char_119072_𝄠()
    {
        $this->assertEquals('𝄠', Converter::dec2unicode(119072));
    }

    /**
     * @test
     */
    public function char_120596_𝜔()
    {
        $this->assertEquals('𝜔', Converter::dec2unicode(120596));
    }

    /**
     * @test
     */
    public function char_194679_屠()
    {
        $this->assertEquals('屠', Converter::dec2unicode(194679));
    }
}
