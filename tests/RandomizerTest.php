<?php

namespace UnicodeRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\BasicLatin;
use UnicodeRanges\Range\Tibetan;
use UnicodeRanges\Range\Cherokee;
use UnicodeRanges\Range\AegeanNumbers;

class RandomizerTest extends TestCase
{
    protected static $randomizer;

    public static function setUpBeforeClass()
    {
        self::$randomizer = new Randomizer();
    }

    /**
     * @test
     */
    public function letter()
    {
        $letter = self::$randomizer->letter([
            new Cherokee,
            new BasicLatin,
            new Tibetan,
            new AegeanNumbers,
        ]);

        $this->assertEquals(1, mb_strlen($letter));
        $this->assertEquals(1, preg_match('/\p{L}/u', $letter));
    }

    /**
     * @test
     */
    public function number()
    {
        $number = self::$randomizer->number([
            new Cherokee,
            new BasicLatin,
            new Tibetan,
            new AegeanNumbers,
        ]);

        $this->assertEquals(1, mb_strlen($number));
        $this->assertEquals(1, preg_match('/\p{N}/u', $number));
    }

    /**
     * @test
     */
    public function printable_char()
    {
        $char = self::$randomizer->printableChar([
            new Cherokee,
            new BasicLatin,
            new Tibetan,
            new AegeanNumbers,
        ]);

        $this->assertEquals(1, mb_strlen($char));
        $this->assertEquals(1, preg_match('/(\p{L}|\p{N}|\p{P}|\p{S})/u', $char));
    }

    /**
     * @test
     */
    public function letters()
    {
        $letters = self::$randomizer->letters([
            new Cherokee,
            new BasicLatin,
            new Tibetan,
            new AegeanNumbers,
        ], 5);

        $this->assertEquals(5, mb_strlen($letters));
        $this->assertEquals(1, preg_match('/\p{L}*/u', $letters));
    }

    /**
     * @test
     */
    public function numbers()
    {
        $numbers = self::$randomizer->letters([
            new Cherokee,
            new BasicLatin,
            new Tibetan,
            new AegeanNumbers,
        ], 5);

        $this->assertEquals(5, mb_strlen($numbers));
        $this->assertEquals(1, preg_match('/\p{N}*/u', $numbers));
    }

    /**
     * @test
     */
    public function printable_chars()
    {
        $chars = self::$randomizer->printableChars([
            new BasicLatin,
            new Tibetan,
            new AegeanNumbers,
        ], 5);

        $this->assertEquals(5, mb_strlen($chars));
        $this->assertEquals(1, preg_match('/(\p{L}|\p{N}|\p{P}|\p{S})*/u', $chars));
    }
}
