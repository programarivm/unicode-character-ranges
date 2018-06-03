<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\LetterlikeSymbols;

class LetterlikeSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LetterlikeSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Letterlike Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2100', $range['hex'][0]);
		$this->assertEquals('214F', $range['hex'][1]);
		$this->assertEquals(8448, $range['dec'][0]);
		$this->assertEquals(8527, $range['dec'][1]);
	}
}
