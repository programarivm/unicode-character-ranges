<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\MathematicalAlphanumericSymbols;

class MathematicalAlphanumericSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MathematicalAlphanumericSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mathematical Alphanumeric Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1D400', $range[0]);
		$this->assertEquals('1D7FF', $range[1]);
	}
}
