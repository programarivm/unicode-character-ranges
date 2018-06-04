<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\KhmerSymbols;

class KhmerSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new KhmerSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Khmer Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('19E0', $range[0]);
		$this->assertEquals('19FF', $range[1]);
	}
}
