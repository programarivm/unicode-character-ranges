<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\YijingHexagramSymbols;

class YijingHexagramSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new YijingHexagramSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('YijingHexagram Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('4DC0', $range[0]);
		$this->assertEquals('4DFF', $range[1]);
	}
}
