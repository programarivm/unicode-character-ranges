<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\ArabicMathematicalAlphabeticSymbols;

class ArabicMathematicalAlphabeticSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ArabicMathematicalAlphabeticSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arabic Mathematical Alphabetic Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1EE00', $range[0]);
		$this->assertEquals('1EEFF', $range[1]);
	}
}
