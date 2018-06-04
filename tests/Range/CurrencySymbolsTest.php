<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CurrencySymbols;

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
		$this->assertEquals('Currency Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('20A0', $range[0]);
		$this->assertEquals('20CF', $range[1]);
	}
}
