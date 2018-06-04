<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CurrencySymbols;

class CurrencySymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CurrencySymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Currency Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('20A0', $range[0]);
		$this->assertEquals('20CF', $range[1]);
	}
}
