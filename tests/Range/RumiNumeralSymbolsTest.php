<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\RumiNumeralSymbols;

class RumiNumeralSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new RumiNumeralSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Rumi Numeral Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10E60', $range[0]);
		$this->assertEquals('10E7F', $range[1]);
	}
}
