<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\ArabicMathematicalAlphabeticSymbols;

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
		$this->assertEquals('Arabic Mathematical Alphabetic Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1EE00', $range[0]);
		$this->assertEquals('1EEFF', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [];

		$this->assertTrue($expected == $keywords);
	}
}
