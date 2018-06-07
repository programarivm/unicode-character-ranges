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
    /**
     * @test
     */
    public function letter()
    {
        $letter = Randomizer::letter([
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
        $number = Randomizer::number([
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
        $char = Randomizer::printableChar([
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
        $letters = Randomizer::letters([
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
        $numbers = Randomizer::letters([
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
        $chars = Randomizer::printableChars([
            new BasicLatin,
            new Tibetan,
            new AegeanNumbers,
        ], 5);

        $this->assertEquals(5, mb_strlen($chars));
        $this->assertEquals(1, preg_match('/(\p{L}|\p{N}|\p{P}|\p{S})*/u', $chars));
    }
}
